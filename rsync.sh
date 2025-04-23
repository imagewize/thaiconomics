#!/bin/bash

rsync -av --delete \
  --exclude 'node_modules/' \
  --exclude 'vendor/' \
  --exclude '.git/' \
  --exclude '.github/' \
  ~/code/thaiconomics.com/site/web/app/themes/thaiconomics/ \
  ~/code/thaiconomics/
  
