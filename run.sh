#!/bin/bash

# Exit on error
set -e

echo "Starting Laravel Application Setup..."

# Step 1: Check for Composer
if ! [ -x "$(command -v composer)" ]; then
  echo "Error: Composer is not installed." >&2
  exit 1
fi

# Step 2: Install dependencies
echo "Installing Composer dependencies..."
composer install

# Step 3: Check for .env file
if [ ! -f ".env" ]; then
  echo ".env file not found. Creating one from .env.example..."
  cp .env.example .env
fi

# Step 4: Generate application key
echo "Generating application key..."
php artisan key:generate

# Step 5: Migrate the database
echo "Migrating the database..."
php artisan migrate --force

# Step 6: Seed the database
echo "Seeding the database..."
php artisan db:seed --force

# Step 7: Install NPM dependencies
if [ -f "package.json" ]; then
  if ! [ -x "$(command -v npm)" ]; then
    echo "Error: npm is not installed." >&2
    exit 1
  fi

  echo "Installing NPM dependencies..."
  npm install

  # Step 8: Run front-end build
  echo "Building front-end assets..."
  npm run dev
else
  echo "package.json not found. Skipping front-end build."
fi

