#!/bin/bash

UML=${UML:-./docs/ticket.uml}
SVG=${SVG:-./docs/model.svg}
TMP=${TMP:-tmp}

rm ${SVG}

curl -X POST http://localhost:8888/form -d "text=$(cat ${UML})" -D - > ${TMP}

wget -O ${SVG} $(cat ${TMP} | grep Location | sed -e 's/Location: //g' | sed -e 's/\/uml/\/svg/g')

rm ${TMP}
