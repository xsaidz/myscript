<div dir="ltr" style="text-align: left;" trbidi="on">

<ul class='tabs'>
  <li><a href='#tab1'>Tab 1</a></li>
  <li><a href='#tab2'>Tab 2</a></li>
  <li><a href='#tab3'>Tab 3</a></li>
</ul>
<div id='tab1'>
  <p>Hi, this is the first tab.</p>
</div>
<div id='tab2'>
  <p>This is the 2nd tab.</p>
</div>
<div id='tab3'>
  <p>And this is the 3rd tab.</p>
</div>

</div>

<script>
$('ul.tabs').each(function(){
  var $active, $content, $links = $(this).find('a');

  $active = $($links.filter('[href="'+location.hash+'"]')[0] || $links[0]);
  $active.addClass('active');

  $content = $($active[0].hash);

  $links.not($active).each(function () {
    $(this.hash).hide();
  });

  $(this).on('click', 'a', function(e){
    // Make the old tab inactive.
    $active.removeClass('active');
    $content.hide();

    $active = $(this);
    $content = $(this.hash);

    $active.addClass('active');
    $content.show();

    e.preventDefault();
  });
});
</script>
