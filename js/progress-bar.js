var $progress = $('.progress-bar');

$('button').on('click', function(event) {
  var $target = $(event.target),
      currentProgress = $progress.text(),
      percentage = parseInt(currentProgress.replace(/[СДЕЛАНО СТАВОК]/g, ""));

  if($target.attr('role') === "increment" && percentage !== 20){
    percentage ++;
  }

  if($target.attr('role') === "decrement" && percentage !== 0){
    percentage --;
  }

  $progress.find('.value').css('width', (percentage*5)+ '%').text('СДЕЛАНО ' + percentage + ' СТАВОК');
  //$progress.find('.value').css('width', percentage + '%').text('СДЕЛАНО ' + percentage + ' СТАВОК');

});
