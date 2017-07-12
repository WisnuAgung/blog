// Items
var $form = $('form#form_absensi'),
	$form_nama = $form.find('#nama');
	
$form_nama.keyup(function(){
	if ($.trim($(this).val()) == '')
	{
		
	}
});

$form_nama = $form_nama.autocomplete({
	url: '../../karyawan/models/autocomplete.php',
	header: ['Nama', 'Telepon', 'Jabatan'],
	model: [
		{ name: 'id', id: true },
		{ name: 'nama', width: 150 },
		{ name: 'telepon', width: 100 },
		{ name: 'jabatan', width: 100 }
	],
	width: 800,
	selected: function(response){		
		$form_nama.val(response.nama);
	}
});