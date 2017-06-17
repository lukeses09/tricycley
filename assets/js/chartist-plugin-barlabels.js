function ctBarLabels(options) {
  return function ctBarLabels(chart) {
    var defaultOptions = {
      labelClass: 'ct-label',
      labelOffset: {
        x: 0,
        y: -5
      },
      textAnchor: 'middle'
    };

    options = Chartist.extend({}, defaultOptions, options);


    if (chart instanceof Chartist.Bar) {
      chart.on('draw', function(data) {

        //////////////Custom Script

        if (data.type === 'bar' && data.value.y != 0) {
          
           if (data.type === 'bar' && data.value.y < 0 && data.value.y.toString().split(".")[1] == "21462146") {

          data.group.elem('text', {
            x: data.x2 + options.labelOffset.x,
            y: data.value.y > 0 ? data.y2 + options.labelOffset.y : data.y1 + options.labelOffset.y,
            style: 'text-anchor: ' + options.textAnchor
          }, options.labelClass).text(    (Math.abs(data.value.y)).toString().slice(0,1)+"%"  );
        }
            else if (data.type === 'bar' && data.value.y < 0) {

          data.group.elem('text', {
            x: data.x2 + options.labelOffset.x,
            y: data.value.y > 0 ? data.y2 + options.labelOffset.y : data.y1 + options.labelOffset.y,
            style: 'text-anchor: ' + options.textAnchor
          }, options.labelClass).text(    (Math.abs(data.value.y)).toString().slice(0,2)+"%"  );
        }

         else if (data.type === 'bar' && data.value.y > 0) {
          data.group.elem('text', {
            x: data.x2 + options.labelOffset.x,
            y: data.value.y > 0 ? data.y2 + options.labelOffset.y : data.y1 + options.labelOffset.y,
            style: 'text-anchor: ' + options.textAnchor
          }, options.labelClass).text( comma(data.value.y));
        }


        }

      });
    }
  }
}

  function comma(val){
    while (/(\d+)(\d{3})/.test(val.toString())){
      val = val.toString().replace(/(\d+)(\d{3})/, '$1'+','+'$2');
    }
    return val;
  }
