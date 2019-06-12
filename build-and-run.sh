#!/usr/bin/env bash

docker build -t "saml-aem" -f "Dockerfile" .
docker run -p 8080:8080 saml-aem