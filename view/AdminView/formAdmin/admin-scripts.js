/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */ 

var $table = $('table'),
    process = false;

$('.error').click(function(){
  $.tablesorter.showError( $table, 'This is the error row');
});

$('.process').click(function(){
  process = !process;
  $.tablesorter.isProcessing( $table, process );
});

$('.sortable').click(function(){
  $table
    .find('.tablesorter-header:last').toggleClass('sorter-false')
    .trigger('update');
});

$table.tablesorter({
  theme: 'bootstrap',
  headerTemplate: '{content} {icon}',
  sortList: [ [0,0], [1,0], [2,0] ],
  widgets : [ 'zebra', 'columns', 'filter', 'uitheme' ]
});