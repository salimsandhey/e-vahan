$path = "d:\e-vahan\resources\views\automatic-testing-system.blade.php"
$lines = Get-Content $path
$replacement = Get-Content "d:\e-vahan\scratch\ats_replacement.html" -Raw
$output = @()
for ($i=0; $i -lt 82; $i++) { $output += $lines[$i] }
$output += $replacement
for ($i=86; $i -lt $lines.Length; $i++) { $output += $lines[$i] }
$output | Set-Content $path
