#!/bin/bash

# Instalar dependências do Composer
composer install --no-dev --optimize-autoloader

# Instalar dependências do NPM
npm install

# Build dos assets
npm run build

# Criar diretório dist
mkdir -p dist

# Copiar arquivos necessários
cp -r public dist/
cp -r vendor dist/
cp -r bootstrap dist/
cp -r app dist/
cp -r config dist/
cp -r resources dist/
cp -r routes dist/
cp -r storage dist/
cp .env.example dist/.env 