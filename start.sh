#!/usr/bin/env bash
# Starts this WordPress site locally.
#
# This is WordPress 4.9 (2018). It CANNOT run on PHP 8 — plugins here use
# create_function(), which PHP 8 removed. So we pin PHP 7.4 explicitly.
set -euo pipefail

PHP=/opt/homebrew/opt/php@7.4/bin/php
PORT=8080
ROOT="$(cd "$(dirname "$0")" && pwd)"

[ -x "$PHP" ] || { echo "Missing PHP 7.4. Run: brew install shivammathur/php/php@7.4"; exit 1; }
brew services list | grep -q "^mysql.*started" || { echo "Starting MySQL..."; brew services start mysql; sleep 5; }

echo "WordPress running at http://localhost:$PORT   (admin: http://localhost:$PORT/wp-admin/)"
echo "Press Ctrl+C to stop."
# Multiple workers are REQUIRED, not an optimization. WordPress fires a loopback
# request to its own wp-cron.php while serving a page; with a single-threaded
# server that request can never be accepted, so every page load deadlocks until
# the socket times out. PHP 7.4+ honours PHP_CLI_SERVER_WORKERS on Unix.
export PHP_CLI_SERVER_WORKERS=4
exec "$PHP" -S "localhost:$PORT" -t "$ROOT" "$ROOT/router.php"
