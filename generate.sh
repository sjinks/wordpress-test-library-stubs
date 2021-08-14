#!/bin/sh

FILE="wordpress-test-library-stubs.php"

"$(dirname "$0")/vendor/bin/generate-stubs" \
    --finder=finder.php \
    --out="${FILE}" \
    --force \
    --nullify-globals \
    --functions \
    --classes \
    --interfaces \
    --traits \
    --documented-globals

cat fixes.php >> "${FILE}"
