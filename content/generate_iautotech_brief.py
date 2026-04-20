from reportlab.lib.pagesizes import A4
from reportlab.lib import colors
from reportlab.lib.styles import getSampleStyleSheet, ParagraphStyle
from reportlab.lib.units import cm
from reportlab.platypus import (
    SimpleDocTemplate, Paragraph, Spacer, Table, TableStyle,
    HRFlowable, PageBreak
)
from reportlab.lib.enums import TA_LEFT, TA_CENTER
from reportlab.platypus import KeepTogether

# ── Colour palette ──────────────────────────────────────────────
BRAND      = colors.HexColor("#1B3A6B")
ACCENT     = colors.HexColor("#E8A020")
LIGHT_BG   = colors.HexColor("#F5F7FA")
ROW_ALT    = colors.HexColor("#EEF2F7")
WHITE      = colors.white
TEXT_DARK  = colors.HexColor("#1A1A2E")
TEXT_MID   = colors.HexColor("#4A5568")
TEXT_LIGHT = colors.HexColor("#718096")

base = getSampleStyleSheet()

def style(name, **kw):
    return ParagraphStyle(name, **kw)

S = {
    "doc_title": style("doc_title",
        fontName="Helvetica-Bold", fontSize=22,
        textColor=WHITE, alignment=TA_CENTER, spaceAfter=4),

    "doc_sub": style("doc_sub",
        fontName="Helvetica", fontSize=10,
        textColor=colors.HexColor("#BFD3F6"), alignment=TA_CENTER, spaceAfter=2),

    "meta": style("meta",
        fontName="Helvetica", fontSize=8.5,
        textColor=colors.HexColor("#BFD3F6"), alignment=TA_CENTER, spaceAfter=0),

    "page_title": style("page_title",
        fontName="Helvetica-Bold", fontSize=17,
        textColor=WHITE, alignment=TA_CENTER, spaceAfter=4),

    "page_sub": style("page_sub",
        fontName="Helvetica", fontSize=9.5,
        textColor=colors.HexColor("#BFD3F6"), alignment=TA_CENTER),

    "sec_num": style("sec_num",
        fontName="Helvetica-Bold", fontSize=8,
        textColor=ACCENT, spaceAfter=2),

    "sec_heading": style("sec_heading",
        fontName="Helvetica-Bold", fontSize=12,
        textColor=BRAND, spaceAfter=6, spaceBefore=14),

    "note": style("note",
        fontName="Helvetica-Oblique", fontSize=8.5,
        textColor=TEXT_MID, leftIndent=10, spaceAfter=6),

    "table_header": style("table_header",
        fontName="Helvetica-Bold", fontSize=8.5,
        textColor=WHITE),

    "table_field": style("table_field",
        fontName="Helvetica-Bold", fontSize=8.5,
        textColor=BRAND),

    "table_val": style("table_val",
        fontName="Helvetica", fontSize=8.5,
        textColor=TEXT_DARK, leading=12),

    "status_head": style("status_head",
        fontName="Helvetica-Bold", fontSize=11,
        textColor=BRAND, spaceAfter=8, spaceBefore=12),

    "footer_txt": style("footer_txt",
        fontName="Helvetica", fontSize=7.5,
        textColor=TEXT_LIGHT, alignment=TA_CENTER),
}

# ── Helpers ──────────────────────────────────────────────────────
def cover_header(title, subtitle, meta_lines):
    data = [[Paragraph(title, S["doc_title"])],
            [Paragraph(subtitle, S["doc_sub"])]]
    for m in meta_lines:
        data.append([Paragraph(m, S["meta"])])
    t = Table(data, colWidths=[17*cm])
    t.setStyle(TableStyle([
        ("BACKGROUND", (0,0), (-1,-1), BRAND),
        ("TOPPADDING",    (0,0), (-1, 0),  18),
        ("BOTTOMPADDING", (0,-1),(-1,-1), 18),
        ("LEFTPADDING",   (0,0), (-1,-1),  12),
        ("RIGHTPADDING",  (0,0), (-1,-1),  12),
        ("ROUNDEDCORNERS", [6]),
    ]))
    return t

def page_banner(title, subtitle):
    data = [[Paragraph(title, S["page_title"])],
            [Paragraph(subtitle, S["page_sub"])]]
    t = Table(data, colWidths=[17*cm])
    t.setStyle(TableStyle([
        ("BACKGROUND",    (0,0), (-1,-1), BRAND),
        ("TOPPADDING",    (0,0), (-1, 0), 14),
        ("BOTTOMPADDING", (0,-1),(-1,-1), 14),
        ("LEFTPADDING",   (0,0), (-1,-1), 12),
        ("RIGHTPADDING",  (0,0), (-1,-1), 12),
    ]))
    return t

def section(num, heading, rows, note=None):
    elements = []
    elements.append(Paragraph(f"SECTION {num}", S["sec_num"]))
    elements.append(Paragraph(heading, S["sec_heading"]))

    table_data = [[
        Paragraph("Field", S["table_header"]),
        Paragraph("Details", S["table_header"]),
    ]]
    for field, detail in rows:
        table_data.append([
            Paragraph(field, S["table_field"]),
            Paragraph(detail, S["table_val"]),
        ])

    t = Table(table_data, colWidths=[4.5*cm, 12.5*cm])
    t.setStyle(TableStyle([
        ("BACKGROUND",    (0,0), (-1, 0), BRAND),
        ("TEXTCOLOR",     (0,0), (-1, 0), WHITE),
        ("FONTNAME",      (0,0), (-1, 0), "Helvetica-Bold"),
        ("FONTSIZE",      (0,0), (-1,-1), 8.5),
        ("ROWBACKGROUNDS",(0,1), (-1,-1), [WHITE, ROW_ALT]),
        ("GRID",          (0,0), (-1,-1), 0.4, colors.HexColor("#D1D9E6")),
        ("VALIGN",        (0,0), (-1,-1), "TOP"),
        ("TOPPADDING",    (0,0), (-1,-1), 5),
        ("BOTTOMPADDING", (0,0), (-1,-1), 5),
        ("LEFTPADDING",   (0,0), (-1,-1), 7),
        ("RIGHTPADDING",  (0,0), (-1,-1), 7),
    ]))
    elements.append(t)

    if note:
        elements.append(Spacer(1, 4))
        elements.append(Paragraph(f"Note: {note}", S["note"]))

    elements.append(Spacer(1, 6))
    return KeepTogether(elements)

def status_table(rows):
    header = [
        Paragraph("Section", S["table_header"]),
        Paragraph("ATS", S["table_header"]),
        Paragraph("ADTC", S["table_header"]),
        Paragraph("STPMS", S["table_header"]),
    ]
    data = [header]

    def status_cell(txt):
        if "Available" in txt:
            bg = colors.HexColor("#C6F6D5"); fg = colors.HexColor("#276749")
        elif "To be" in txt or "To be sourced" in txt or "To be confirmed" in txt:
            bg = colors.HexColor("#FEFCBF"); fg = colors.HexColor("#744210")
        elif "Partial" in txt:
            bg = colors.HexColor("#BEE3F8"); fg = colors.HexColor("#2B6CB0")
        elif "N/A" in txt:
            bg = colors.HexColor("#E2E8F0"); fg = colors.HexColor("#718096")
        else:
            bg = WHITE; fg = TEXT_DARK
        return (bg, fg, txt)

    cell_styles = []
    for r_idx, (sec, ats, adtc, stpms) in enumerate(rows, start=1):
        ats_bg,   ats_fg,   ats_txt   = status_cell(ats)
        adtc_bg,  adtc_fg,  adtc_txt  = status_cell(adtc)
        stpms_bg, stpms_fg, stpms_txt = status_cell(stpms)
        data.append([
            Paragraph(sec,       S["table_val"]),
            Paragraph(ats_txt,   ParagraphStyle("sc", fontName="Helvetica", fontSize=8, textColor=ats_fg)),
            Paragraph(adtc_txt,  ParagraphStyle("sc", fontName="Helvetica", fontSize=8, textColor=adtc_fg)),
            Paragraph(stpms_txt, ParagraphStyle("sc", fontName="Helvetica", fontSize=8, textColor=stpms_fg)),
        ])
        cell_styles += [
            ("BACKGROUND", (1, r_idx), (1, r_idx), ats_bg),
            ("BACKGROUND", (2, r_idx), (2, r_idx), adtc_bg),
            ("BACKGROUND", (3, r_idx), (3, r_idx), stpms_bg),
        ]

    t = Table(data, colWidths=[5.5*cm, 3.83*cm, 3.83*cm, 3.84*cm])
    t.setStyle(TableStyle([
        ("BACKGROUND",    (0,0), (-1, 0), BRAND),
        ("FONTNAME",      (0,0), (-1, 0), "Helvetica-Bold"),
        ("FONTSIZE",      (0,0), (-1,-1), 8.5),
        ("GRID",          (0,0), (-1,-1), 0.4, colors.HexColor("#D1D9E6")),
        ("VALIGN",        (0,0), (-1,-1), "MIDDLE"),
        ("TOPPADDING",    (0,0), (-1,-1), 5),
        ("BOTTOMPADDING", (0,0), (-1,-1), 5),
        ("LEFTPADDING",   (0,0), (-1,-1), 7),
        ("RIGHTPADDING",  (0,0), (-1,-1), 7),
        ("ROWBACKGROUNDS",(0,1), (0,-1), [WHITE, ROW_ALT]),
    ] + cell_styles))
    return t


# ════════════════════════════════════════════════════════════════
#  DOCUMENT CONTENT
# ════════════════════════════════════════════════════════════════

def build_pdf(output_path):
    doc = SimpleDocTemplate(
        output_path,
        pagesize=A4,
        leftMargin=2*cm, rightMargin=2*cm,
        topMargin=1.8*cm, bottomMargin=1.8*cm,
        title="iAUTOTEC — Landing Page Content Brief",
        author="iAUTOTEC",
    )

    story = []

    # ── COVER ────────────────────────────────────────────────────
    story.append(Spacer(1, 1.5*cm))
    story.append(cover_header(
        "iAUTOTEC — Landing Page Content Brief",
        "ATS  |  ADTC  |  STPMS",
        ["Prepared for: Content Management Team",
         "Project: iAUTOTEC Main Landing Page  |  Pages: 4",
         "Date: April 2026"]
    ))
    story.append(Spacer(1, 0.6*cm))
    story.append(HRFlowable(width="100%", thickness=1, color=colors.HexColor("#D1D9E6")))
    story.append(Spacer(1, 0.3*cm))

    intro_rows = [
        ("Purpose",     "This brief outlines the complete section-by-section structure for the iAUTOTEC main landing page and three standalone solution pages (ATS, ADTC, STPMS). Each row marked 'To be written' requires content from the team before development begins."),
        ("Audience",    "B2B — Government transport departments, smart city authorities, municipal corporations, private testing center operators, and infrastructure developers looking to deploy AI-powered mobility solutions."),
        ("Tone",        "Authoritative, technology-forward, compliance-assured. Professional — not promotional. Emphasise AI, automation, and government alignment."),
        ("Primary CTA", "Lead capture form (Name, Phone, Email, Organization, City, Message) + secondary WhatsApp / Call Now button."),
        ("Tech Setup",  "Main landing page + 3 standalone solution pages. Each solution page has its own URL and minimal layout with no main site navigation."),
        ("SEO Focus",   "Primary keyword: 'AI Vehicle Testing System India'. Separate landing pages for ATS, ADTC, and STPMS with targeted keywords per solution."),
    ]
    t = Table(
        [[Paragraph(f, S["table_field"]), Paragraph(d, S["table_val"])] for f, d in intro_rows],
        colWidths=[3.8*cm, 13.2*cm]
    )
    t.setStyle(TableStyle([
        ("BACKGROUND",    (0,0), (-1,-1), LIGHT_BG),
        ("GRID",          (0,0), (-1,-1), 0.4, colors.HexColor("#D1D9E6")),
        ("VALIGN",        (0,0), (-1,-1), "TOP"),
        ("TOPPADDING",    (0,0), (-1,-1), 5),
        ("BOTTOMPADDING", (0,0), (-1,-1), 5),
        ("LEFTPADDING",   (0,0), (-1,-1), 7),
        ("RIGHTPADDING",  (0,0), (-1,-1), 7),
        ("FONTSIZE",      (0,0), (-1,-1), 8.5),
    ]))
    story.append(t)
    story.append(PageBreak())

    # ════════════════════════════════════════════════════════════
    #  MAIN LANDING PAGE — iAUTOTEC
    # ════════════════════════════════════════════════════════════
    story.append(page_banner(
        "MAIN PAGE — iAUTOTEC Landing Page",
        "AI Enabled Automation Solutions for Vehicle Testing, Driver Training & Smart Mobility"
    ))
    story.append(Spacer(1, 0.4*cm))

    story.append(section("01", "Hero Banner", [
        ("Background",    "Full-width hero image — AI/automotive/smart city visual"),
        ("Badge text",    "AI-Powered  |  Government Aligned  |  Smart City Ready"),
        ("Main Headline", "AI Enabled Automation Solutions for Vehicle Testing, Driver Training & Smart Mobility"),
        ("Sub Headline",  "1–2 lines. Angle: iAUTOTEC as India's leading AI-powered mobility automation partner for governments and operators"),
        ("CTA Button 1",  "Explore Our Solutions — scrolls to solutions section"),
        ("CTA Button 2",  "Request Demo — scrolls to lead form"),
        ("CTA Button 3",  "Partner With Us — tel / WhatsApp link"),
    ], note="Headline should speak to government authorities and private operators — positioning iAUTOTEC as a strategic technology partner, not a vendor."))

    story.append(section("02", "About iAUTOTEC", [
        ("Layout",        "Left: text content  |  Right: facility / technology image"),
        ("Label (small)", "About iAUTOTEC"),
        ("Heading",       "Leading Provider of AI-Enabled Automation Solutions"),
        ("Body Copy",     "iAUTOTEC is a leading provider of AI-enabled automation solutions for the automotive and mobility sector, specialising in vehicle testing systems, driver training and testing centers, and smart traffic & parking management solutions. We help governments, transport authorities, and private operators transition from manual, inefficient systems to fully automated, data-driven, and compliant infrastructure."),
        ("Body Copy 2",   "With a strong focus on Artificial Intelligence (AI), IoT, and automation, iAUTOTEC delivers scalable solutions that improve road safety, operational efficiency, and revenue generation."),
        ("Trust Strip",   "Client / partner logos — images to be sourced by team"),
    ]))

    story.append(section("03", "Our Core Solutions", [
        ("Section Heading", "Our Expertise in Smart Mobility Solutions"),
        ("Sub Heading",     "We design and implement end-to-end automation systems for:"),
        ("Layout",          "3 large solution cards — full width, one per solution"),
        ("Card 1",          "ATS — Automated Vehicle Testing Systems: AI-powered vehicle inspection lanes, fitness testing, VAHAN integration. CTA: Learn More about ATS"),
        ("Card 2",          "ADTC — Accredited Driver Training & Testing Centers: AI-based driving simulators, automated test tracks, digital LMS, licensing authority integration. CTA: Learn More about ADTC"),
        ("Card 3",          "STPMS — Smart Traffic & Parking Management Systems: Real-time parking tracking, AI-based traffic monitoring, IoT sensors, mobile app integration. CTA: Learn More about STPMS"),
        ("Note",            "Each card links to its own standalone solution landing page"),
    ]))

    story.append(section("04", "Technology Stack", [
        ("Section Heading", "Technology Behind iAUTOTEC"),
        ("Sub Heading",     "Our platforms are powered by cutting-edge technology"),
        ("Layout",          "5 icon cards in a row"),
        ("Card 1",          "Artificial Intelligence (AI) & Machine Learning"),
        ("Card 2",          "Internet of Things (IoT)"),
        ("Card 3",          "Computer Vision & ANPR Systems"),
        ("Card 4",          "Cloud-Based Infrastructure"),
        ("Card 5",          "Advanced Data Analytics & Reporting"),
        ("Closing Line",    "Ensuring real-time monitoring, predictive insights, and scalable deployment"),
    ]))

    story.append(section("05", "Our Approach", [
        ("Section Heading", "Our Complete Lifecycle Approach"),
        ("Sub Heading",     "From concept to commissioning — we own every phase"),
        ("Layout",          "7 numbered process steps — horizontal timeline or numbered cards"),
        ("Step 01",         "Project Consultation & Feasibility"),
        ("Step 02",         "Customised Solution Design"),
        ("Step 03",         "Infrastructure Development"),
        ("Step 04",         "Hardware & Software Integration"),
        ("Step 05",         "Testing & Commissioning"),
        ("Step 06",         "Training & Deployment"),
        ("Step 07",         "Ongoing Support & Maintenance"),
    ]))

    story.append(section("06", "Why Choose iAUTOTEC", [
        ("Section Heading", "Why Choose iAUTOTEC?"),
        ("Layout",          "5–6 icon cards — 2 rows"),
        ("Card 1",          "Leader in AI-based automotive automation solutions"),
        ("Card 2",          "Expertise in government and smart city projects"),
        ("Card 3",          "End-to-end execution — Design to Deployment"),
        ("Card 4",          "Scalable and future-ready systems"),
        ("Card 5",          "Focus on compliance, transparency, and efficiency"),
        ("Closing Line",    "1 line — tone: confident, partnership-forward"),
    ]))

    story.append(section("07", "Industries We Serve", [
        ("Section Heading", "Industries We Serve"),
        ("Layout",          "6 industry cards with icon + title"),
        ("Card 1",          "Government Transport Departments"),
        ("Card 2",          "Smart City Projects"),
        ("Card 3",          "Municipal Corporations"),
        ("Card 4",          "Private Testing Centers"),
        ("Card 5",          "Driving Training Institutes"),
        ("Card 6",          "Infrastructure Developers"),
    ]))

    story.append(section("08", "Vision & Mission", [
        ("Section Heading",  "Our Vision & Mission"),
        ("Layout",           "Two side-by-side highlighted boxes on light background"),
        ("Vision Heading",   "Our Vision"),
        ("Vision Content",   "To become a global leader in AI-powered mobility and automation solutions, enabling safer roads and smarter cities."),
        ("Mission Heading",  "Our Mission"),
        ("Mission Content",  "To deliver innovative and scalable solutions that digitise and automate vehicle testing, driver training, and traffic management systems."),
    ]))

    story.append(section("09", "Contact / Lead Capture Form", [
        ("Section Heading", "Get In Touch"),
        ("Layout",          "Left: company contact info  |  Right: enquiry form"),
        ("Company Name",    "iAUTOTEC"),
        ("Contact Details", "Phone, Email, Corporate Office address — to be confirmed by team"),
        ("Form Fields",     "Name / Phone Number / Email / Organisation / City / Message"),
        ("Form CTA",        "Send Enquiry"),
        ("Secondary CTAs",  "Request Demo  |  Partner With Us  |  Start Your ATS Center"),
    ]))

    story.append(PageBreak())

    # ════════════════════════════════════════════════════════════
    #  PAGE 1 — ATS
    # ════════════════════════════════════════════════════════════
    story.append(page_banner(
        "PAGE 1 — Automated Vehicle Testing Systems (ATS)",
        "Standalone landing page for the ATS solution — targeting government authorities & private operators"
    ))
    story.append(Spacer(1, 0.4*cm))

    story.append(section("01", "Hero Banner", [
        ("Background",    "Full-width ATS facility / inspection lane image"),
        ("Badge text",    "AI-Powered  |  Government Compliant  |  VAHAN Integrated"),
        ("Main Headline", "To be written by content team"),
        ("Sub Headline",  "1–2 lines. Angle: ATS as AI-powered vehicle inspection that eliminates manual errors and ensures compliance"),
        ("CTA Button 1",  "Request Demo — scrolls to lead form"),
        ("CTA Button 2",  "Start Your ATS Center — tel / WhatsApp link"),
    ], note="Headline should address government transport departments and private testing center operators. Position ATS as the automation solution that replaces corrupt, manual systems."))

    story.append(section("02", "What is ATS?", [
        ("Layout",        "Left: ATS facility/lane image  |  Right: text content"),
        ("Label (small)", "About ATS"),
        ("Heading",       "Automated Vehicle Testing System (ATS)"),
        ("Body Copy",     "The Automated Testing Solution (ATS) is an advanced system designed for automated vehicle inspection and fitness testing, ensuring compliance with transport regulations. AI-powered inspection lanes replace manual processes with transparent, data-driven evaluation."),
        ("Body Copy 2",   "2–3 additional paragraphs covering: integration with VAHAN and government databases, ANPR capabilities, real-time analytics — to be written by content team"),
        ("Trust Strip",   "Logos of MORTH, VAHAN, relevant government bodies — images to be sourced"),
    ]))

    story.append(section("03", "Key Features", [
        ("Section Heading", "Key Features of Our ATS Solution"),
        ("Layout",          "5 feature cards in a row with icon + title + short description"),
        ("Feature 1",       "AI-Powered Vehicle Inspection Lanes — automated visual and mechanical inspection using computer vision"),
        ("Feature 2",       "Automated Fitness Testing & Certification — digital certification with audit-ready reports"),
        ("Feature 3",       "VAHAN & Government Database Integration — real-time data sync with national transport systems"),
        ("Feature 4",       "Real-Time Analytics & Reporting Dashboard — live monitoring and performance insights"),
        ("Feature 5",       "ANPR (Automatic Number Plate Recognition) — automated vehicle identification and tracking"),
    ]))

    story.append(section("04", "Services Covered", [
        ("Section Heading", "Testing Services Covered"),
        ("Layout",          "5–6 service cards — 2 rows"),
        ("Service 1",       "Brake Testing"),
        ("Service 2",       "Suspension Analysis"),
        ("Service 3",       "Emission Testing Integration"),
        ("Service 4",       "Headlight Alignment"),
        ("Service 5",       "Underbody Inspection"),
        ("Note",            "Additional services can be listed based on actual scope — team to confirm full list"),
    ]))

    story.append(section("05", "Benefits", [
        ("Section Heading", "Why Automate with iAUTOTEC ATS?"),
        ("Layout",          "4 benefit cards with icon + headline + 1-line description"),
        ("Benefit 1",       "100% Transparent & Automated Testing — eliminates manual intervention and subjective evaluation"),
        ("Benefit 2",       "Eliminates Manual Errors and Corruption — every test is recorded, timestamped, and audit-ready"),
        ("Benefit 3",       "Faster Vehicle Processing Time — automated lanes process more vehicles with less waiting time"),
        ("Benefit 4",       "Digital Records & Audit-Ready Reports — cloud-stored records accessible to regulatory bodies"),
    ]))

    story.append(section("06", "End-to-End Setup Support", [
        ("Section Heading", "Our End-to-End ATS Setup Support"),
        ("Sub Heading",     "Complete turnkey solution — from concept to commissioning"),
        ("Layout",          "6 numbered process cards — 2 rows × 3 columns"),
        ("Step 01",         "Project Consultation & Feasibility — 2 bullet points needed"),
        ("Step 02",         "Infrastructure Development — 2 bullet points needed"),
        ("Step 03",         "Hardware & Software Integration — 2 bullet points needed"),
        ("Step 04",         "Regulatory Approvals — 2 bullet points needed"),
        ("Step 05",         "Testing & Commissioning — 2 bullet points needed"),
        ("Step 06",         "Training, Deployment & Ongoing Support — 2 bullet points needed"),
    ], note="Content team to provide 2 bullet points per step describing what is included."))

    story.append(section("07", "Gallery", [
        ("Section Heading", "ATS Facility Gallery"),
        ("Layout",          "Auto-scrolling image carousel"),
        ("Images",          "ATS facility, AI inspection lanes, ANPR cameras, dashboard screenshots — team to source"),
    ]))

    story.append(section("08", "SEO & Keywords", [
        ("Primary Keywords",   "Automated Vehicle Testing System, Vehicle Fitness Testing, ATS Center Setup, AI Vehicle Inspection"),
        ("Secondary Keywords", "Vehicle Inspection AI India, VAHAN Integrated Testing, Automated Fitness Certification"),
        ("Schema Markup",      "Organization + Product/Service schema to be implemented by web team"),
        ("Meta Title",         "To be written — include primary keyword"),
        ("Meta Description",   "To be written — include primary keyword + CTA"),
    ]))

    story.append(section("09", "Contact / Lead Capture Form", [
        ("Section Heading", "Get In Touch — ATS Enquiry"),
        ("Layout",          "Left: company contact info  |  Right: enquiry form"),
        ("Company Name",    "iAUTOTEC"),
        ("Contact Details", "Phone, Email, Corporate Office address — to be confirmed by team"),
        ("Form Fields",     "Name / Phone Number / Email / Organisation / City / Message"),
        ("Form CTA",        "Request ATS Demo"),
        ("Secondary CTA",   "Start Your ATS Center"),
    ]))

    story.append(PageBreak())

    # ════════════════════════════════════════════════════════════
    #  PAGE 2 — ADTC
    # ════════════════════════════════════════════════════════════
    story.append(page_banner(
        "PAGE 2 — Accredited Driver Training & Testing Centers (ADTC)",
        "Standalone landing page for the ADTC solution — targeting training center operators & government bodies"
    ))
    story.append(Spacer(1, 0.4*cm))

    story.append(section("01", "Hero Banner", [
        ("Background",    "Full-width ADTC facility / driving simulator / test track image"),
        ("Badge text",    "AI-Powered  |  Licensing Authority Integrated  |  Standardised Training"),
        ("Main Headline", "To be written by content team"),
        ("Sub Headline",  "1–2 lines. Angle: ADTC as AI-powered driver training infrastructure that improves road safety and standardises licensing"),
        ("CTA Button 1",  "Request Demo — scrolls to lead form"),
        ("CTA Button 2",  "Partner With Us — tel / WhatsApp link"),
    ], note="Avoid generic driving school language. Position ADTC as modern, AI-driven training infrastructure aligned with government licensing requirements."))

    story.append(section("02", "What is ADTC?", [
        ("Layout",        "Left: simulator / test track image  |  Right: text content"),
        ("Label (small)", "About ADTC"),
        ("Heading",       "Accredited Driver Training & Testing Center (ADTC)"),
        ("Body Copy",     "The ADTC solution enables the setup of modern driver training and testing centers with automated evaluation systems and digital learning tools. AI-based simulators, automated test tracks, and a digital LMS deliver standardised, unbiased driver assessment and certification."),
        ("Body Copy 2",   "2–3 additional paragraphs covering: integration with licensing authorities, training & testing modules, assessment automation — to be written by content team"),
        ("Stat Strip",    "2–3 key numbers — e.g. road accident data, demand for licensed drivers, market size — team to source"),
    ]))

    story.append(section("03", "Key Features", [
        ("Section Heading", "Key Features of Our ADTC Solution"),
        ("Layout",          "6 feature cards — 2 rows × 3 columns"),
        ("Feature 1",       "AI-Based Driving Simulators — immersive simulation for safe, repeatable practice"),
        ("Feature 2",       "Automated Driving Test Tracks — standardised assessment with no human bias"),
        ("Feature 3",       "Digital Learning Management System (LMS) — theory training, progress tracking, digital records"),
        ("Feature 4",       "Driver Performance Analytics — AI-scored driving behaviour and improvement insights"),
        ("Feature 5",       "Integration with Licensing Authorities — direct data sync for faster certification"),
        ("Feature 6",       "Automated Scoring & Certification — transparent, tamper-proof evaluation records"),
    ]))

    story.append(section("04", "Training & Testing Modules", [
        ("Section Heading", "Training & Testing Modules"),
        ("Layout",          "4 module cards with icon + title + short description"),
        ("Module 1",        "Theory-Based Digital Training — interactive digital curriculum aligned with licensing syllabus"),
        ("Module 2",        "Simulator-Based Driving Practice — AI-monitored virtual driving sessions before on-road practice"),
        ("Module 3",        "On-Road and Test Track Assessment — standardised real-world driving evaluation"),
        ("Module 4",        "Automated Scoring & Certification — instant results, digital certificates, licensing authority reporting"),
    ]))

    story.append(section("05", "Benefits", [
        ("Section Heading", "Why Choose iAUTOTEC ADTC?"),
        ("Layout",          "4 benefit cards with icon + headline + 1-line description"),
        ("Benefit 1",       "Standardised Driver Training & Testing — consistent quality across all candidates and locations"),
        ("Benefit 2",       "Improves Road Safety & Driving Skills — AI-driven feedback produces better, safer drivers"),
        ("Benefit 3",       "Transparent & Unbiased Evaluation — automated scoring eliminates subjectivity and corruption"),
        ("Benefit 4",       "Faster Licensing Process — automated assessment reduces processing time significantly"),
    ]))

    story.append(section("06", "End-to-End Setup Support", [
        ("Section Heading", "Our End-to-End ADTC Setup Support"),
        ("Sub Heading",     "Complete turnkey solution — from concept to commissioning"),
        ("Layout",          "6 numbered process cards — 2 rows × 3 columns"),
        ("Step 01",         "Project Consultation & Feasibility — 2 bullet points needed"),
        ("Step 02",         "Infrastructure Development — 2 bullet points needed"),
        ("Step 03",         "Equipment Procurement & Installation — 2 bullet points needed"),
        ("Step 04",         "Compliance & Accreditation Support — 2 bullet points needed"),
        ("Step 05",         "Curriculum Development & Instructor Training — 2 bullet points needed"),
        ("Step 06",         "Operational Setup, Deployment & Ongoing Support — 2 bullet points needed"),
    ], note="Content team to provide 2 bullet points per step describing what is included."))

    story.append(section("07", "Gallery", [
        ("Section Heading", "ADTC Facility Gallery"),
        ("Layout",          "Auto-scrolling image carousel"),
        ("Images",          "Driving simulators, test tracks, training classrooms, digital LMS interface — team to source"),
    ]))

    story.append(section("08", "SEO & Keywords", [
        ("Primary Keywords",   "Driver Training Center Setup, Automated Driving Test Track, ADTC India, Driving Simulator Training"),
        ("Secondary Keywords", "AI Driver Training India, Accredited Driving Center, Digital LMS Driving, Licensing Authority Integration"),
        ("Schema Markup",      "Organization + Product/Service schema to be implemented by web team"),
        ("Meta Title",         "To be written — include primary keyword"),
        ("Meta Description",   "To be written — include primary keyword + CTA"),
    ]))

    story.append(section("09", "Contact / Lead Capture Form", [
        ("Section Heading", "Get In Touch — ADTC Enquiry"),
        ("Layout",          "Left: company contact info  |  Right: enquiry form"),
        ("Company Name",    "iAUTOTEC"),
        ("Contact Details", "Phone, Email, Corporate Office address — to be confirmed by team"),
        ("Form Fields",     "Name / Phone Number / Email / Organisation / City / Message"),
        ("Form CTA",        "Request ADTC Demo"),
        ("Secondary CTA",   "Partner With Us"),
    ]))

    story.append(PageBreak())

    # ════════════════════════════════════════════════════════════
    #  PAGE 3 — STPMS
    # ════════════════════════════════════════════════════════════
    story.append(page_banner(
        "PAGE 3 — Smart Traffic & Parking Management Systems (STPMS)",
        "Standalone landing page for STPMS — targeting smart city authorities & urban operators"
    ))
    story.append(Spacer(1, 0.4*cm))

    story.append(section("01", "Hero Banner", [
        ("Background",    "Full-width smart city / traffic / parking facility image"),
        ("Badge text",    "AI-Powered  |  IoT-Enabled  |  Smart City Ready"),
        ("Main Headline", "To be written by content team"),
        ("Sub Headline",  "1–2 lines. Angle: STPMS as AI-driven infrastructure that reduces congestion, maximises parking revenue, and improves urban mobility"),
        ("CTA Button 1",  "Request Demo — scrolls to lead form"),
        ("CTA Button 2",  "Partner With Us — tel / WhatsApp link"),
    ], note="Target audience is smart city project managers, municipal corporations, and private parking operators. Lead with efficiency, revenue, and user experience gains."))

    story.append(section("02", "What is STPMS?", [
        ("Layout",        "Left: smart parking / traffic control image  |  Right: text content"),
        ("Label (small)", "About STPMS"),
        ("Heading",       "Smart Traffic & Parking Management System (STPMS)"),
        ("Body Copy",     "The STPMS solution is designed for smart cities and urban infrastructure, enabling efficient traffic flow and intelligent parking management. Real-time IoT sensors, AI-based traffic monitoring, and integrated mobile applications transform how cities manage movement and parking."),
        ("Body Copy 2",   "2–3 additional paragraphs covering: command & control dashboard, ANPR integration, digital payment system, mobile app — to be written by content team"),
        ("Stat Strip",    "2–3 key numbers — e.g. traffic congestion costs, parking revenue opportunity, smart city adoption stats — team to source"),
    ]))

    story.append(section("03", "Key Features", [
        ("Section Heading", "Key Features of Our STPMS Solution"),
        ("Layout",          "6 feature cards — 2 rows × 3 columns"),
        ("Feature 1",       "Real-Time Parking Availability Tracking — live sensor data shows available spaces instantly"),
        ("Feature 2",       "Smart Parking Allocation System — automated guidance directs drivers to nearest available space"),
        ("Feature 3",       "AI-Based Traffic Monitoring — intelligent analysis of traffic patterns for adaptive signal control"),
        ("Feature 4",       "Integrated Mobile App & Dashboards — user-facing app + operator command center"),
        ("Feature 5",       "Digital Payment Integration — cashless payments for parking via app or kiosk"),
        ("Feature 6",       "ANPR Cameras — automated vehicle identification for enforcement and billing"),
    ]))

    story.append(section("04", "System Components", [
        ("Section Heading", "System Components"),
        ("Layout",          "4 component cards with icon + title + short description"),
        ("Component 1",     "IoT-Based Parking Sensors — ground-level sensors that detect vehicle presence and transmit real-time availability data"),
        ("Component 2",     "ANPR Cameras — number plate recognition for automated entry, exit, and enforcement"),
        ("Component 3",     "Command & Control Dashboard — centralised operator interface for monitoring and management"),
        ("Component 4",     "User Mobile Application — real-time parking discovery, navigation, payment, and booking for end users"),
    ]))

    story.append(section("05", "Benefits", [
        ("Section Heading", "Why Choose iAUTOTEC STPMS?"),
        ("Layout",          "4 benefit cards with icon + headline + 1-line description"),
        ("Benefit 1",       "Reduces Traffic Congestion — real-time guidance eliminates parking-search traffic in urban areas"),
        ("Benefit 2",       "Maximises Parking Utilisation — smart allocation ensures near-100% occupancy efficiency"),
        ("Benefit 3",       "Improves User Experience — seamless app-based discovery, navigation, and payment"),
        ("Benefit 4",       "Increases Revenue for Operators — digital enforcement and dynamic pricing drive higher yield"),
    ]))

    story.append(section("06", "End-to-End Setup Support", [
        ("Section Heading", "Our End-to-End STPMS Setup Support"),
        ("Sub Heading",     "Complete turnkey solution — from feasibility to live deployment"),
        ("Layout",          "6 numbered process cards — 2 rows × 3 columns"),
        ("Step 01",         "Site Survey & Feasibility Study — 2 bullet points needed"),
        ("Step 02",         "System Design & Architecture — 2 bullet points needed"),
        ("Step 03",         "IoT Hardware Installation — 2 bullet points needed"),
        ("Step 04",         "Software Integration & Dashboard Setup — 2 bullet points needed"),
        ("Step 05",         "Testing, Commissioning & Go-Live — 2 bullet points needed"),
        ("Step 06",         "Training, Handover & Ongoing Support — 2 bullet points needed"),
    ], note="Content team to provide 2 bullet points per step describing what is included."))

    story.append(section("07", "Gallery", [
        ("Section Heading", "STPMS Deployment Gallery"),
        ("Layout",          "Auto-scrolling image carousel"),
        ("Images",          "Smart parking facilities, IoT sensors, ANPR cameras, dashboard interface, mobile app — team to source"),
    ]))

    story.append(section("08", "SEO & Keywords", [
        ("Primary Keywords",   "Smart Parking System, Traffic Management System, IoT Parking Solution, Smart City Parking India"),
        ("Secondary Keywords", "AI Traffic Control India, Real-Time Parking Tracking, ANPR Parking System, Urban Mobility Solution"),
        ("Schema Markup",      "Organization + Product/Service schema to be implemented by web team"),
        ("Meta Title",         "To be written — include primary keyword"),
        ("Meta Description",   "To be written — include primary keyword + CTA"),
    ]))

    story.append(section("09", "Contact / Lead Capture Form", [
        ("Section Heading", "Get In Touch — STPMS Enquiry"),
        ("Layout",          "Left: company contact info  |  Right: enquiry form"),
        ("Company Name",    "iAUTOTEC"),
        ("Contact Details", "Phone, Email, Corporate Office address — to be confirmed by team"),
        ("Form Fields",     "Name / Phone Number / Email / Organisation / City / Message"),
        ("Form CTA",        "Request STPMS Demo"),
        ("Secondary CTA",   "Partner With Us"),
    ]))

    story.append(PageBreak())

    # ════════════════════════════════════════════════════════════
    #  CONTENT STATUS SUMMARY
    # ════════════════════════════════════════════════════════════
    story.append(page_banner(
        "Content Status Summary",
        "Use this table to track which sections are ready and which require team input"
    ))
    story.append(Spacer(1, 0.5*cm))
    story.append(Paragraph("Content Readiness Overview", S["status_head"]))

    status_rows = [
        ("Hero Headline & Sub-headline",        "To be written",      "To be written",      "To be written"),
        ("About / What is Section",             "Available (brief)",  "Available (brief)",  "Available (brief)"),
        ("Key Features — descriptions",         "Available (brief)",  "Available (brief)",  "Available (brief)"),
        ("Services / Modules / Components",     "Available (brief)",  "Available (brief)",  "Available (brief)"),
        ("Benefits — card descriptions",        "Available (brief)",  "Available (brief)",  "Available (brief)"),
        ("Setup Support bullet points",         "To be written",      "To be written",      "To be written"),
        ("SEO Meta Title & Description",        "To be written",      "To be written",      "To be written"),
        ("Stats & Key Numbers",                 "To be sourced",      "To be sourced",      "To be sourced"),
        ("Trust / Partner Logos",               "To be sourced",      "To be sourced",      "To be sourced"),
        ("Gallery Images",                      "To be sourced",      "To be sourced",      "To be sourced"),
        ("Enquiry form destination email",      "To be confirmed",    "To be confirmed",    "To be confirmed"),
        ("Contact details (phone, address)",    "To be confirmed",    "To be confirmed",    "To be confirmed"),
        ("Schema markup (web team)",            "To be implemented",  "To be implemented",  "To be implemented"),
    ]
    story.append(status_table(status_rows))
    story.append(Spacer(1, 0.5*cm))

    legend_data = [[
        Paragraph("Legend:", S["table_field"]),
        Paragraph("Available", ParagraphStyle("lg", fontName="Helvetica", fontSize=8, textColor=colors.HexColor("#276749"))),
        Paragraph("Partial / Confirm", ParagraphStyle("lg", fontName="Helvetica", fontSize=8, textColor=colors.HexColor("#2B6CB0"))),
        Paragraph("To be written / sourced", ParagraphStyle("lg", fontName="Helvetica", fontSize=8, textColor=colors.HexColor("#744210"))),
        Paragraph("N/A", ParagraphStyle("lg", fontName="Helvetica", fontSize=8, textColor=colors.HexColor("#718096"))),
    ]]
    lt = Table(legend_data, colWidths=[2.5*cm, 2.8*cm, 3.8*cm, 4.5*cm, 2.4*cm])
    lt.setStyle(TableStyle([
        ("BACKGROUND", (0,0), (-1,-1), LIGHT_BG),
        ("GRID",       (0,0), (-1,-1), 0.4, colors.HexColor("#D1D9E6")),
        ("VALIGN",     (0,0), (-1,-1), "MIDDLE"),
        ("TOPPADDING", (0,0), (-1,-1), 5),
        ("BOTTOMPADDING",(0,0),(-1,-1), 5),
        ("LEFTPADDING",(0,0), (-1,-1), 7),
        ("RIGHTPADDING",(0,0),(-1,-1), 7),
        ("BACKGROUND", (1,0), (1,0), colors.HexColor("#C6F6D5")),
        ("BACKGROUND", (2,0), (2,0), colors.HexColor("#BEE3F8")),
        ("BACKGROUND", (3,0), (3,0), colors.HexColor("#FEFCBF")),
        ("BACKGROUND", (4,0), (4,0), colors.HexColor("#E2E8F0")),
    ]))
    story.append(lt)

    story.append(Spacer(1, 1*cm))
    story.append(HRFlowable(width="100%", thickness=0.5, color=colors.HexColor("#D1D9E6")))
    story.append(Spacer(1, 0.3*cm))
    story.append(Paragraph(
        "iAUTOTEC  |  AI Enabled Automation Solutions for Vehicle Testing, Driver Training & Smart Mobility",
        S["footer_txt"]
    ))

    doc.build(story)
    print(f"PDF saved: {output_path}")


if __name__ == "__main__":
    build_pdf("e:/e-vahan/content/iAUTOTEC_Landing_Page_Content_Brief.pdf")
