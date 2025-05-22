import os
import re

def update_file(file_path):
    with open(file_path, 'r', encoding='utf-8') as file:
        content = file.read()
    
    # Replace header includes
    content = re.sub(
        r'<\?php\s+include_once\("header-box(?:_el|_ru)?\.php"\);\s*\?>',
        '<?php include_language_specific_part(\'header\'); ?>',
        content
    )
    
    # Replace footer includes
    content = re.sub(
        r'<\?php\s+include_once\("footer-box(?:_el|_ru)?\.php"\);\s*\?>',
        '<?php include_language_specific_part(\'footer\'); ?>',
        content
    )
    
    with open(file_path, 'w', encoding='utf-8') as file:
        file.write(content)

def main():
    # Get the current directory
    current_dir = os.getcwd()
    
    # Find all PHP files
    php_files = []
    for root, dirs, files in os.walk(current_dir):
        for file in files:
            if file.endswith('.php'):
                php_files.append(os.path.join(root, file))
    
    # Update each file
    for file_path in php_files:
        print(f"Updating {file_path}...")
        try:
            update_file(file_path)
            print(f"Successfully updated {file_path}")
        except Exception as e:
            print(f"Error updating {file_path}: {str(e)}")

if __name__ == "__main__":
    main() 