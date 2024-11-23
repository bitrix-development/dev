
function parseColumn(e){
	var column = {};
	column['name'] = $(e).data('id');
	column['data'] = $(e).data('id');
	column['searchable'] = $(e).data('searchable');
	column['orderable'] = $(e).data('orderable');
	column['responsivePriority'] = parseInt($(e).data('responsivePriority'));	
	return column;
}

function makeDataTable(o){
	var table = $('table', o),
					columns = [],
					section_id = $(o).data('section_id'),
					search = [];
	if(table.is('.dataTable'))
		return false;
	$('tr:first-child th',table).each(function(i,e){
		if($(e).data('id')=='complexh'){
			$('#goal_targets_table tr th[data-id^="'+$(e).data('name')+'"]').each(function(si,se){
				columns.push(parseColumn(se));
				search.push($(si).data('search'));
			});
		}else{
			columns.push(parseColumn(e));
			search.push($(e).data('search'));
		}
	});
	
	table.DataTable({
		"processing": true,
		"searching": false,
	//	"bPaginate": false,
		dom: '<"pull-right"B>t',
		"serverSide": false,
		"responsive": true,
		"autoWidth": true,
		"pageLength": 9999,
		responsive: true,
		buttons: [
			{
				extend: 'print',
				text: 'Версия для печати',
				autoPrint: true,
				title: $(o).parent().find('h2 a').text(),
				customize: function(w,b,dt){
					var logo = $('.logo img').clone(),
						date = new Date(),
						datespan = $('<span style="float:right;">Цены актуальны на '+ ('0' + date.getDate()).slice(-2) + '.' + ('0' + (date.getMonth() + 1)).slice(-2) + '.' + date.getFullYear() +'</span>');		
					logo.attr('src', 'https://'+window.location.hostname+logo.attr('src'));
					//$('h1', w.document.body).before(logo);
					$('table', w.document.body).after(datespan);
				}
			}
		],
		"ajax": 'ajax/GET_PRODUCTS/?SECTION_ID='+section_id+'&sessid='+BX.bitrix_sessid(),
		"language": {"url": "//cdn.datatables.net/plug-ins/1.10.16/i18n/Russian.json"},
		"columns": columns,
		"aoSearchCols": search,
		initComplete: function () {
		},
	});
	table.on( 'draw.dt', function () {
		$(this).DataTable().columns.adjust();
	} );
}
