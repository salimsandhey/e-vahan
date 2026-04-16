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
BRAND      = colors.HexColor("#1B3A6B")   # dark navy
ACCENT     = colors.HexColor("#E8A020")   # amber / gold
LIGHT_BG   = colors.HexColor("#F5F7FA")
ROW_ALT    = colors.HexColor("#EEF2F7")
WHITE      = colors.white
TEXT_DARK  = colors.HexColor("#1A1A2E")
TEXT_MID   = colors.HexColor("#4A5568")
TEXT_LIGHT = colors.HexColor("#718096")

# ── Styles ───────────────────────────────────────────────────────
base = getSampleStyleSheet()

def style(name, **kw):
    s = ParagraphStyle(name, **kw)
    return s

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
    """Dark navy cover band."""
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
    """Per-page accent banner."""
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
    """Numbered section with a two-column table."""
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
    row_styles = [
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
    ]
    t.setStyle(TableStyle(row_styles))
    elements.append(t)

    if note:
        elements.append(Spacer(1, 4))
        elements.append(Paragraph(f"Note: {note}", S["note"]))

    elements.append(Spacer(1, 6))
    return KeepTogether(elements)

def status_table(rows):
    """Coloured status summary table."""
    header = [
        Paragraph("Section", S["table_header"]),
        Paragraph("ATS", S["table_header"]),
        Paragraph("ADTC", S["table_header"]),
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
    for r_idx, (sec, ats, adtc) in enumerate(rows, start=1):
        ats_bg, ats_fg, ats_txt   = status_cell(ats)
        adtc_bg, adtc_fg, adtc_txt = status_cell(adtc)
        data.append([
            Paragraph(sec,      S["table_val"]),
            Paragraph(ats_txt,  ParagraphStyle("sc", fontName="Helvetica", fontSize=8, textColor=ats_fg)),
            Paragraph(adtc_txt, ParagraphStyle("sc", fontName="Helvetica", fontSize=8, textColor=adtc_fg)),
        ])
        cell_styles += [
            ("BACKGROUND", (1, r_idx), (1, r_idx), ats_bg),
            ("BACKGROUND", (2, r_idx), (2, r_idx), adtc_bg),
        ]

    t = Table(data, colWidths=[6.5*cm, 5.25*cm, 5.25*cm])
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
        title="eVAHAN — ATS & ADTC Landing Page Content Brief",
        author="eVAHAN",
    )

    story = []

    # ── COVER ────────────────────────────────────────────────────
    story.append(Spacer(1, 1.5*cm))
    story.append(cover_header(
        "eVAHAN — Landing Page Content Brief",
        "Automatic Testing System (ATS)  |  Automatic Driving Training Centre (ADTC)",
        ["Prepared for: Content Management Team",
         "Project: Standalone Domain Landing Pages  |  Pages: 2",
         "Date: March 2026"]
    ))
    story.append(Spacer(1, 0.6*cm))
    story.append(HRFlowable(width="100%", thickness=1, color=colors.HexColor("#D1D9E6")))
    story.append(Spacer(1, 0.3*cm))
    intro_rows = [
        ("Purpose", "This brief outlines the complete section-by-section structure for two standalone landing pages. Each row marked 'To be written' requires content from the team before development begins."),
        ("Audience", "B2B — Entrepreneurs and investors looking to SET UP an ATS or ADTC centre, not end-users of the service."),
        ("Tone", "Confident, investment-forward, compliance-assured. Professional — not promotional."),
        ("Primary CTA", "Lead capture form (Name, Phone, Email, City, Message) + secondary WhatsApp / Call Now button."),
        ("Tech Setup", "Both pages will be built inside the existing Laravel application with a standalone minimal layout (no main site navigation)."),
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
    #  PAGE 1 — ATS
    # ════════════════════════════════════════════════════════════
    story.append(page_banner(
        "PAGE 1 — Automatic Testing System (ATS)",
        "Standalone landing page targeting investors / entrepreneurs who want to set up an ATS centre"
    ))
    story.append(Spacer(1, 0.4*cm))

    story.append(section("01", "Hero Banner", [
        ("Background",      "Full-width ATS facility image"),
        ("Badge text",      "Government Approved  |  GSR 195(E) Compliant"),
        ("Main Headline",   "To be written by content team"),
        ("Sub Headline",    "1–2 lines. Angle: ATS as a government-backed, high-demand business opportunity"),
        ("CTA Button 1",    "Enquire Now — scrolls to lead form on same page"),
        ("CTA Button 2",    "Call Us Now — tel link"),
    ], note="Headline should address a business investor/entrepreneur — someone who wants to SET UP an ATS centre, not someone using one."))

    story.append(section("02", "What is ATS?", [
        ("Layout",          "Left: ATS facility/lane image  |  Right: text content"),
        ("Label (small)",   "About ATS"),
        ("Heading",         "Automated Testing System (ATS)"),
        ("Body Copy",       "2–3 paragraphs covering: what ATS is, why it is government-mandated, Ministry of Road Transport backing"),
        ("Trust Strip",     "Logos of MORTH, ARAI, ICAT, CIRT displayed below the text  (images to be sourced)"),
    ]))

    story.append(section("03", "Why Invest in ATS?", [
        ("Section Heading", "Why Invest in ATS?"),
        ("Layout",          "5 icon cards in a row"),
        ("Card 1",          "Government-Driven Mandatory Ecosystem — short description needed"),
        ("Card 2",          "High Demand — Scrappage Policy & Fitness Norms — short description needed"),
        ("Card 3",          "Limited Licenses — First Mover Advantage — short description needed"),
        ("Card 4",          "Recurring Revenue Model — short description needed"),
        ("Card 5",          "State Transport Department Partnerships — short description needed"),
        ("Closing Line",    "1 line below the cards — tone: confident, investment-forward"),
    ]))

    story.append(section("04", "Government Policy & Compliance", [
        ("Background",      "Light grey / smoke"),
        ("Section Heading", "Regulatory Framework We Operate Under"),
        ("Card 1",          "GSR 652 (E) — short description of what this notification covers"),
        ("Card 2",          "GSR 797 (E) — short description of what this notification covers"),
        ("Card 3",          "GSR 195 (E), dated 14.03.2024 — short description of what this notification covers"),
        ("Bottom Statement","1 line: confidence in 100% compliance and approval-readiness"),
    ]))

    story.append(section("05", "End-to-End Setup Support", [
        ("Section Heading", "Our End-to-End ATS Setup Support"),
        ("Sub Heading",     "Complete turnkey solution — from concept to commissioning"),
        ("Layout",          "6 numbered process cards — 2 rows × 3 columns"),
        ("Step 01",         "Infrastructure Development — 2 bullet points needed"),
        ("Step 02",         "Advanced Equipment Installation — 2 bullet points needed"),
        ("Step 03",         "Regulatory Approvals — 2 bullet points needed"),
        ("Step 04",         "Training & Capacity Building — 2 bullet points needed"),
        ("Step 05",         "Operations & Maintenance — 2 bullet points needed"),
        ("Step 06",         "Business & Operational Support — 2 bullet points needed"),
    ], note="Content for Steps 01–06 is available in the ATS brochure. Team to review and refine for landing page tone."))

    story.append(section("06", "Key Features of ATS Machinery", [
        ("Section Heading", "Key Features of Our ATS Machinery"),
        ("Layout",          "8 cards — 2-column grid"),
        ("Feature 1",       "Made in India Excellence — description needed"),
        ("Feature 2",       "Smart OEE Monitoring System — description needed"),
        ("Feature 3",       "Advanced CAN-Based Communication — description needed"),
        ("Feature 4",       "QR Code Enabled Equipment — description needed"),
        ("Feature 5",       "Proven OEM Integration — description needed"),
        ("Feature 6",       "Energy Efficient Technology (up to 70% savings) — description needed"),
        ("Feature 7",       "Durable Engineering (35,000+ hours lifespan) — description needed"),
        ("Feature 8",       "Fully Government Compliant (GSR 195 E) — description needed"),
    ]))

    story.append(section("07", "Global Expertise", [
        ("Section Heading",     "Global Technology. Local Execution."),
        ("Layout",              "Left column + Right column + Full-width highlight box at bottom"),
        ("Left Column Heading", "Global Technology Advantage"),
        ("Left Column Content", "3 bullet points — to be written by team"),
        ("Right Column Heading","Why Our Global Partnerships Matter"),
        ("Right Column Content","5 benefit tags: Higher Accuracy / Future-Proof Technology / Faster Approvals / Operational Efficiency / Higher ROI — expand each into 1 line"),
        ("Highlight Box",       "4 pillars: Global Machinery + Indian Regulatory Expertise + On-Ground Execution + Pan-India Service Support"),
    ]))

    story.append(section("08", "Gallery", [
        ("Section Heading", "ATS Facility Gallery"),
        ("Layout",          "Auto-scrolling image carousel"),
        ("Images",          "ATS facility, machinery, testing lanes — existing images available"),
    ]))

    story.append(section("09", "Ongoing & Upcoming Projects", [
        ("Section Heading", "Ongoing & Upcoming Projects"),
        ("Layout",          "4-image grid"),
        ("Images",          "Project site photos — team to source"),
        ("Footnote line",   "Detailed project list can be shared upon request"),
    ]))

    story.append(section("10", "Contact / Lead Capture Form", [
        ("Section Heading", "Get In Touch"),
        ("Layout",          "Left: company contact info  |  Right: enquiry form"),
        ("Company Name",    "iAUTO Ventures Private Limited (A Joint Venture of VKARE Retail Ventures Pvt. Ltd. and FDL Services, United Kingdom)"),
        ("Contact Details", "Phone, Email, Corporate Office address, Registered Office address"),
        ("Form Fields",     "Name / Phone Number / Email / City / Message"),
        ("Form CTA",        "Send Enquiry"),
    ]))

    story.append(PageBreak())

    # ════════════════════════════════════════════════════════════
    #  PAGE 2 — ADTC
    # ════════════════════════════════════════════════════════════
    story.append(page_banner(
        "PAGE 2 — Automatic Driving Training Centre (ADTC)",
        "Standalone landing page targeting investors / entrepreneurs who want to set up an ADTC"
    ))
    story.append(Spacer(1, 0.4*cm))

    story.append(section("01", "Hero Banner", [
        ("Background",    "Full-width ADTC facility / training image"),
        ("Badge",         "Government Accredited  |  Ministry of Road Transport Approved"),
        ("Main Headline", "To be written by content team"),
        ("Sub Headline",  "1–2 lines. Angle: ADTC as a high-demand, government-backed business opportunity"),
        ("CTA Button 1",  "Enquire Now — scrolls to lead form"),
        ("CTA Button 2",  "Call Us Now — tel link"),
    ], note="Same investor-facing angle as ATS hero. Avoid generic driving school language."))

    story.append(section("02", "What is ADTC?", [
        ("Layout",        "Left: training facility / simulator image  |  Right: text content"),
        ("Label (small)", "About ADTC"),
        ("Heading",       "Automatic Driving Training Centre (ADTC)"),
        ("Body Copy",     "2–3 paragraphs: what ADTC is, regulatory accreditation, training scope"),
        ("Stat Strip",    "2–3 key numbers — e.g. licensed drivers demand, road accident data, market size (team to source)"),
    ]))

    story.append(section("03", "Why Invest in ADTC?", [
        ("Section Heading", "Why Invest in ADTC?"),
        ("Layout",          "5 icon cards in a row"),
        ("Card 1",          "Rising Demand for Licensed Drivers in India — short description needed"),
        ("Card 2",          "Government Mandate & Accreditation Backing — short description needed"),
        ("Card 3",          "Steady Recurring Fee-Based Revenue — short description needed"),
        ("Card 4",          "Low Competition — High Growth Market — short description needed"),
        ("Card 5",          "Contribute to National Road Safety — short description needed"),
    ]))

    story.append(section("04", "Types of Driving Training Centres", [
        ("Section Heading", "4 Types of Government Recognised Driving Training Centres"),
        ("Layout",          "4 cards side by side"),
        ("Card 1",          "IDTR — Institute of Driving Training & Research — 1-2 line description"),
        ("Card 2",          "RDTC — Regional Driving Training Centre — 1-2 line description"),
        ("Card 3",          "DTC — Driving Training Centre — 1-2 line description"),
        ("Card 4",          "ADTC — Accredited Driving Training Centre — 1-2 line description (highlight this as what eVAHAN sets up)"),
    ]))

    story.append(section("05", "Training Programs Offered", [
        ("Section Heading", "Training Programs at Our ADTC"),
        ("Layout",          "4–6 program cards with icon + title + short description"),
        ("Programs",        "Full list to be provided by content team — e.g. LMV, HMV, Two-Wheeler, Defensive Driving etc."),
    ], note="This section is entirely dependent on content team input. Please provide program names and 1–2 line descriptions for each."))

    story.append(section("06", "What We Provide — Setup Support", [
        ("Section Heading", "Our End-to-End ADTC Setup Support"),
        ("Layout",          "6 numbered process cards"),
        ("Step 01",         "Infrastructure Development — 2 bullet points"),
        ("Step 02",         "Equipment Procurement & Installation — 2 bullet points"),
        ("Step 03",         "Compliance & Accreditation Support — 2 bullet points"),
        ("Step 04",         "Curriculum Development & Training Programs — 2 bullet points"),
        ("Step 05",         "Instructor Training — 2 bullet points"),
        ("Step 06",         "Operational Setup & Management — 2 bullet points"),
    ], note="Base content available from existing ADTC service page. Team to review and expand for landing page tone."))

    story.append(section("07", "Facility Features", [
        ("Section Heading", "World-Class ADTC Facility"),
        ("Layout",          "6–8 icon feature cards"),
        ("Feature 1",       "Driving Simulators — description needed"),
        ("Feature 2",       "Dedicated Test Track — description needed"),
        ("Feature 3",       "Classroom & Theory Room — description needed"),
        ("Feature 4",       "Digital Learning Systems — description needed"),
        ("Feature 5",       "Certified & Trained Instructors — description needed"),
        ("Feature 6+",      "Add more features based on actual facility — team to fill"),
    ]))

    story.append(section("08", "Gallery", [
        ("Section Heading", "ADTC Facility Gallery"),
        ("Layout",          "Auto-scrolling image carousel"),
        ("Images",          "ADTC training facility, simulators, test track — existing images available"),
    ]))

    story.append(section("09", "Contact / Lead Capture Form", [
        ("Section Heading", "Get In Touch"),
        ("Layout",          "Left: company contact info  |  Right: enquiry form"),
        ("Company Name",    "iAUTO Ventures Private Limited (A Joint Venture of VKARE Retail Ventures Pvt. Ltd. and FDL Services, United Kingdom)"),
        ("Contact Details", "Phone, Email, Corporate Office address, Registered Office address"),
        ("Form Fields",     "Name / Phone Number / Email / City / Message"),
        ("Form CTA",        "Send Enquiry"),
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
        ("Hero Headline & Sub-headline",       "To be written",    "To be written"),
        ("About / What is Section",            "Available (brochure)", "Available (existing page)"),
        ("Why Invest — card descriptions",     "Partial (brochure)","To be written"),
        ("GSR / Compliance descriptions",      "Available (brochure)", "N/A"),
        ("Setup Support bullet points",        "Available",        "Available"),
        ("Machinery feature descriptions",     "Partial (brochure)","N/A"),
        ("Training Programs list",             "N/A",              "To be written"),
        ("Facility Features list",             "N/A",              "To be written"),
        ("Stats & Numbers",                    "To be confirmed",  "To be sourced"),
        ("Trust logos (MORTH, ARAI, ICAT etc.)","Images to be sourced","Images to be sourced"),
        ("Gallery Images",                     "Available",        "Available"),
        ("Project Photos",                     "To be sourced",    "To be sourced"),
        ("Enquiry form destination email",     "To be confirmed",  "To be confirmed"),
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
        "eVAHAN — iAUTO Ventures Pvt. Ltd.  |  E-160, Phase 7, Industrial Area, SAS Nagar Mohali – 160055  |  contact@e-vahan.com",
        S["footer_txt"]
    ))

    doc.build(story)
    print(f"PDF saved: {output_path}")


if __name__ == "__main__":
    build_pdf("d:/e-vahan/content/eVAHAN_Landing_Page_Content_Brief.pdf")
