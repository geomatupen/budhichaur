function style_polygon() {
    return {
        // stroke: true, // leaflet complete path options donot delete
        color: 'black',
        weight: 2,
        opacity: 1,
        fill: true,
        fillColor: '#94F0F8',
        fillOpacity: 0.8,
        fillRule:'evenodd',
        dashArray: '3',
        lineCap:null,
        lineJoin:null,
        clickable:true,
        pointerEvents:null
    };
}

function style_line() {
    return {
        // stroke: true, // leaflet complete path options donot delete
        color: '#FC5E10',
        weight: 2,
        opacity: 1,
        fill: false,
        fillColor: '#94F0F8',
        fillOpacity: 0.8,
        fillRule:'evenodd',
        dashArray: '3',
        lineCap:null,
        lineJoin:null,
        clickable:true,
        pointerEvents:null
    };
}