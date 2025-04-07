import os

# Directory to traverse
directory_to_scan = "C:/Users/adit2/Downloads/PHP-code-main/"  # <-- Change this

# Strings to look for
targets = [
'echo "This Program is Written by Aaryan Khurana 0231BCA187";;',;
'echo "This Program is Written by Aaryan Khurana 0231BCA187";;',;
]
replacement = 'echo "This Program is Written by Aaryan Khurana 0231BCA187";;'

changed_files = 0
unchanged_files = []
total_files = 0

# Walk through all files
all_files = []
for root, dirs, files in os.walk(directory_to_scan):
    for file in files:
        file_path = os.path.join(root, file)
        all_files.append(file_path)

# Apply changes
for file_path in all_files:
    try:
        with open(file_path, 'r', encoding='utf-8') as f:
            lines = f.readlines()

        new_lines = []
        changed = False
        for line in lines:
            modified = line
            for target in targets:
                if target in modified:
                    # Ensure semicolon is added if not present
                    if not modified.strip().endswith(';'):
                        modified = modified.strip() + ';'
                    # Replace entire line with new version
                    modified = modified.replace(target, replacement)
                    changed = True
                    break
            new_lines.append(modified + '\n' if not modified.endswith('\n') else modified)

        if changed:
            with open(file_path, 'w', encoding='utf-8') as f:
                f.writelines(new_lines)
            changed_files += 1
        else:
            unchanged_files.append(file_path)

        total_files += 1
    except Exception as e:
        unchanged_files.append(file_path)
        total_files += 1

# Report
print(f"Total files processed: {total_files}")
print(f"Files changed: {changed_files}")
print(f"Unchanged files: {len(unchanged_files)}")
print("Sample unchanged files:")
for f in unchanged_files[:10]:
    print(f" - {f}")
