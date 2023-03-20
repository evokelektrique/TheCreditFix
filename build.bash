#!/usr/bin/env bash

# Variables
SECONDS=0 # Used for display elapsed time

# Remove
echo -e "[🗑️ ]\tRemoving old 'TheCreditFix-Theme.zip'"
rm ./TheCreditFix-Theme.zip

# Mix
echo -e "[🚧]\tCompiling resources..."
npx mix --production >/dev/null

# Archive
echo -e "[📦]\tArchiving..."
zip -r TheCreditFix-Theme.zip ./ \
-x ./node_modules/\* \
-x ./.git\* \
-x ./resources/\* \
-x ./docker-compose.yml \
-x ./TheCreditFix-Theme.zip \
-x ./.editorconfig \
-x ./package-lock.json \
>/dev/null

# Success message
echo -e "[✅]\tBuild is ready to use."

duration=$SECONDS
echo -e "[⏱️ ]\t$(($duration / 60)) minutes and $(($duration % 60)) seconds elapsed."
