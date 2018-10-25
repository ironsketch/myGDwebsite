DIRS=()
for FILE in notes/*; do
    if [[ -d $FILE ]]; then
        DIRS+=( "$FILE" )
        echo $FILE
    fi
done
for f in "${DIRS[@]}"; do
    echo "element is: $f"
done
