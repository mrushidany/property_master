
var toast = function (type, message, title) {
    if (type == 'error') {
        title = typeof title !== 'undefined' ? title : 'Error';
        iziToast.error({
            title: title,
            message: message,
            position: 'topRight'
        });
    } else if (type == 'warning') {
        typeof title !== 'undefined' ? title : 'Caution';
        iziToast.warning({
            title: title,
            message: message,
            position: 'topRight'
        });
    } else if (type == 'success') {
        title = typeof title !== 'undefined' ? title : 'Success';
        iziToast.success({
            title: title,
            message: message,
            position: 'topRight'
        });
    } else if (type == 'info') {
        title = typeof title !== 'undefined' ? title : 'Hi';
        iziToast.info({
            title: title,
            message: message,
            position: 'topRight'
        });
    } else {
        iziToast.show({
            title: title,
            message: message,
            position: 'topRight'
        });
    }
};   ///// FOR TOAST NOTIFICATIONS


$('#client_list').each(function () {
    var table = $(this);
    table.DataTable({
      serverSide: true,
      ajax: {
         type: 'POST',
         url: base_url + 'clients/clients_list',
      },
        columns: [
            {'orderable': true},
            {'orderable': true},
            {'orderable': true},
            {'orderable': true},
            {'orderable': true},
            {'orderable': false}
        ],
        drawCallback:function () {
            $('.dataTables_wrapper').removeClass('form-inline');
            $('.save_client').each(function () {
                var button = $(this);
                var form = button.closest('.modal');
                if(button.attr('initialized') != 'true') {
                    button.click(function () {
                        var client_name = form.find('input[name="client_name"]').val();
                        var phone = form.find('input[name="phone"]').val();
                        var alternative_phone = form.find('input[name="alternative_phone"]').val();
                        var email = form.find('input[name="email"]').val();
                        var address = form.find('textarea[name="address"]').val();
                        var client_id = button.attr('client_id');


                        if (client_name != '' && phone != '' && email != '' && address != '') {
                            button.attr('data-dismiss', 'modal');
                            form.modal('hide');
                            $.post(
                                base_url + 'clients/save_client',
                                {
                                    client_id: client_id,
                                    client_name: client_name,
                                    phone: phone,
                                    alternative_phone: alternative_phone,
                                    email: email,
                                    address: address
                                }, function (data) {
                                    $('#client_list').DataTable().draw('page');
                                    toast('success',client_name,'Added');
                                }
                            )
                        }else {
                            button.attr('data-dismiss','false');
                            toast('error','Fill the required fields!','Error');
                        }
                    });
                    button.attr('initialized','true')
                }
            });
            $('.delete_client').click(function () {
                var client_id = $(this).attr('client_id');
                var client_name = $(this).attr('client_name');

                $.confirm({
                   title: 'Delete' + ' ' + client_name,
                   content: 'This action is irreversible. Are you sure?',
                   buttons: {
                       confirm: {
                           text: 'Delete',
                           btnClass: 'btn btn-danger',
                           action: function () {
                               $.post(
                                   base_url + 'clients/delete_client',
                                   {
                                       client_id: client_id,
                                   },function (data) {
                                       $('#client_list').DataTable().draw('page');
                                       toast('success',client_name,'Deleted');
                                   }
                               );
                           }
                       },

                       cancel: {
                           text: 'Cancel',
                           btnClass: 'btn btn-default'
                       }
                   }
                });

            });

        }
    });
});

$('#property_list').each(function () {
    var table = $(this);
    table.DataTable({
        serverSide: true,
        ajax: {
              type: 'POST',
              url: base_url + 'properties/properties_list',
              data: {
                
              }
        },

        columns: [
            {'orderable':true},
            {'orderable':true},
            {'orderable':true},
            {'orderable':true},
            {'orderable':false}
        ],
        drawCallback: function () {
            $('.dataTables_wrapper').removeClass('form-inline');
          $('.save_property').each(function () {
              var button = $(this);
              var form = button.closest('.modal');

              if(button.attr('initialized') != 'true'){
                  button.click(function () {
                      var property_name = form.find('input[name="property_name"]').val();
                      var property_code = form.find('input[name="property_code"]').val();
                      var description = form.find('textarea[name="description"]').val();
                      var property_type_id = form.find('select[name="property_type_id"]').val();
                      var property_id = button.attr('property_id');
                      var parent_id = form.find('select[name="parent_id"]').val();
                      
                      if( property_name != '' && property_code != '' && description != ''){
                          button.attr('data-dismiss','modal');
                          form.modal('hide');
                          $.post(
                              base_url + 'properties/save_property',
                              {
                                  property_name: property_name,
                                  property_code: property_code,
                                  description: description,
                                  property_type_id: property_type_id,
                                  property_id: property_id,
                                  parent_id: parent_id
                              },
                              function (data) {
                                  $('#property_list').DataTable().draw('page');
                                  toast('success',property_name,'Added');
                              }
                          );
                      }else{
                          button.attr('data-dismiss','false');
                          toast('error','Fill the required fields!');
                      }

                  });
                  button.attr('initialized','true');
              }


          });
          $('.delete_property').click(function () {
              var property_id = $(this).attr('property_id');
              var property_name = $(this).attr('property_name');
              $.confirm({
                  title: 'Delete' + ' ' + property_name,
                  content: 'This action is irreversible. Are you sure?',
                  buttons: {
                      confirm : {
                          text: 'Delete',
                          btnClass: 'btn btn-danger',
                          action:function () {
                              $.post(
                                  base_url + 'properties/delete_property',
                                  {
                                    property_id : property_id
                                  },function (data) {
                                      $('#property_list').DataTable().draw('page');
                                      toast('success',property_name,'Deleted');
                                  }
                              );
                          }
                      },
                      cancel: {
                          text: 'Cancel',
                          btnClass: 'btn btn-default'
                      }
                  }
              })

          })

        }
    });
});

$('#property_type_list').each(function () {
    var table = $(this);
    table.DataTable({
        serverSide: true,
        ajax: {
          type: 'POST',
          url: base_url + 'properties/properties_type_list',
        },
        columns: [
            {'orderable': true},
            {'orderable': true},
            {'orderable': false}
        ],
        drawCallback:function () {
            $('.dataTables_wrapper').removeClass('form-inline');
            $('.save_property_type').each(function () {
               var button = $(this);
               var form = button.closest('.modal');
                if(button.attr('initialized') !='true'){
                    button.click(function () {
                        var type_name = form.find('input[name="type_name"]').val();
                        var description = form.find('textarea[name="description"]').val();
                        var type_id = button.attr('type_id');

                        if( type_name !='' && description !=''){
                            button.attr('data-dismiss','modal');
                            form.modal('hide');
                            $.post(
                                base_url + 'properties/save_property_type',
                                {
                                    type_name : type_name,
                                    description : description,
                                    type_id: type_id
                                },function (data) {
                                    $('#property_type_list').DataTable().draw('page');
                                    toast('success',type_name,'Added');
                                }
                            );
                        }else{
                            button.attr('data-dismiss','false');
                            toast('error','Fill the required fields!');
                        }

                    });
                    button.attr('initialized','true');
                }


            });
            $('.delete_property_type').click(function () {
                var type_id = $(this).attr('type_id');
                var type_name = $(this).attr('type_name');
                $.confirm({
                    title: 'Delete' + ' ' + type_name,
                    content: 'This action is irreversible. Are you sure?',
                    buttons: {
                        confirm : {
                            text: 'Delete',
                            btnClass: 'btn btn-danger',
                            action:function () {
                                $.post(
                                    base_url + 'properties/delete_property_type',
                                    {
                                        type_id : type_id
                                    },function (data) {
                                        $('#property_type_list').DataTable().draw('page');
                                        toast('success',type_name,'Deleted');
                                    }
                                );
                            }
                        },
                        cancel: {
                            text: 'Cancel',
                            btnClass: 'btn btn-default'
                        }
                    }
                });

            });
        }
    });
});

$('#property_client_list').each(function () {
   var table = $(this);
   table.DataTable({

   });
});

$('#contract_list').each(function () {
   var table = $(this);
     table.DataTable({
        serverSide: true,
         ajax:{
            type: 'POST',
            url: base_url + 'contracts/contracts_list'
         },
         columns :[
             {'orderable': true},
             {'orderable': true},
             {'orderable':true},
             {'orderable': true},
             {'orderable': true},
             {'orderable': true},
             {'orderable': true},
             {'orderable': false}
             ],
         drawCallback:function () {
             $('.dataTables_wrapper').removeClass('form-inline');
             $('.save_contract').each(function () {
                var button = $(this);
                var form = button.closest('.modal');
                    if(button.attr('initialized') != 'true'){
                        button.click(function () {
                            var contract_number = form.find('input[name="contract_number"]').val();
                            var client_id = form.find('select[name="client_id"]').val();
                            var start_date = form.find('input[name="start_date"]').val();
                            var end_date = form.find('input[name="end_date"]').val();
                            var currency_id = form.find('select[name="currency_id"]').val();
                            var contract_sum = form.find('input[name="contract_sum"]').val();
                            var description = form.find('textarea[name="description"]').val();

                            if( contract_number !='' && client_id !='' && start_date !='' && end_date !='' && currency_id !='' && contract_sum !=''){
                                button.attr('data-dismiss','modal');
                                form.modal('hide');
                                $.post(
                                    base_url + 'contracts/save_contract',
                                    {
                                        contract_number : contract_number,
                                        client_id : client_id,
                                        start_date : start_date,
                                        end_date : end_date,
                                        currency_id : currency_id,
                                        contract_sum : contract_sum,
                                        description : description,
                                    }, function (data) {
                                        $('#contract_list').DataTable().draw('page');
                                        toast('success',contract_number,'Added');
                                    }
                                );
                            }else {
                                button.attr('data-dismiss','false');
                                toast('error','Fill all the required fields!');
                            }
                        });
                        button.attr('initialized','true');
                    }
             });
             $('.delete_contract').click(function () {
                var contract_id = $ (this).attr('contract_id');
                $.confirm({
                    title: 'Delete',
                    content: 'This action is irreversible. Are you sure?',
                    buttons: {
                        confirm: {
                            text: 'Delete',
                            btnClass: 'btn btn-danger',
                            action:function () {
                                $.post(
                                    base_url + 'contracts/delete_contract',
                                    {
                                        contract_id: contract_id
                                    },function (data) {
                                        $('#contract_list').DataTable().draw('page');
                                        toast('success','Deleted');
                                    }
                                );
                            }
                        },
                        cancel: {
                            text: 'Cancel',
                            btnClass: 'btn btn-default'
                        }
                    }
                });

             });

         }
     });
});

$('#clients_profile_list').each(function () {
   var table = $(this)
    table.DataTable({
		serverSide: false,
		ajax:{
			type: 'POST',
			url: base_url + 'clients/clients_profile_list',
			data:{
				client_id: table.attr('client_id')
			}
		},
		columns : [
			{'orderable': true},
			{'orderable': true},
			{'orderable': true},
			{'orderable': true},
			{'orderable': true},
			{'orderable': false}
		],
		drawCallback:function () {
			$('.dataTables_wrapper').removeClass('form-inline');
			$('#clients_profile_list').DataTable().draw('page');

		}
    });
});

// $(document).ready(function () {
//    //Add minus icon for collapse element which is open by default
//    $(".collapse.in").each(function () {
//        $(this).siblings('.panel-heading').find('.glyphicon').addClass('glyphicon-minus').removeClass('glyphicon-plus');
//    });
//
//    //Toggle plus minus icon on show hide of collapse element
//     $('.collapse').on('show.bs.collapse', function () {
//        $(this).parent().find('.glyphicon').removeClass('glyphicon-plus').addClass('glyphicon-minus');
//     }).on('hide.bs.collapse', function () {
//         $(this).parent().find('.glyphicon').removeClass('glyphicon-minus').addClass('glyphicon-plus');
//     });
// });


