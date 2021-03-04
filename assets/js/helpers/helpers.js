import { deleteMethod } from '../api_methods/delete.js';
import { postMethod } from '../api_methods/post.js';
import { putMethod } from '../api_methods/put.js';

export const helpers = {
  gridEmployee: function (employeeList) {
    return {
      width: '100%',
      height: 'auto',
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      datatype: 'json',
      deleteConfirm: 'Do you really want to delete the client?',
      data: employeeList,

      onItemDeleting: function (args) {
        deleteMethod.url('deleteEmployee', args.item.id).done(data => {
          $('.toast-msg').html(`
              <div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                <div class='toast-body'>
                ${data}
                </div>
              </div>

              <script>
                $(".toast").toast({
                delay: 3000
                });
                $(".toast").toast('show');
              </script>`);
        });
      },
      onItemInserting: function (args) {
        postMethod.url('addEmployee', args.item).done(data => {
          args.item.id = data;
          args.item.lastName = '';
          args.item.gender = '';
          $('#main-wrapper').jsGrid('refresh');
          $('.toast-msg').html(`
                <div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                  <div class='toast-body'>
                  ${data}
                  </div>
                </div>

                <script>
                  $(".toast").toast({
                  delay: 3000
                  });
                  $(".toast").toast('show');
                </script>`);
        });
      },
      onItemUpdating: function (args) {
        putMethod.url('updateEmployee', args.item).done(data => {
          $('.toast-msg').html(`
                <div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                  <div class='toast-body'>
                    ${data}
                  </div>
                </div>

                <script>
                  $(".toast").toast({
                  delay: 3000
                  });
                  $(".toast").toast('show');
                </script>`);
        });
      },
      rowClick: function (args) {
        window.location.href = `${URL}dashboard/employee/${args.item.id}`;
      },

      fields: [
        {
          name: 'name',
          type: 'text',
          width: 150,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'email',
          type: 'text',
          width: 200,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'age',
          type: 'number',
          width: 50,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'streetAddress',
          type: 'text',
          width: 200,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'city',
          type: 'text',
          width: 200,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'state',
          type: 'text',
          width: 50,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'postalCode',
          type: 'number',
          width: 70,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'phoneNumber',
          type: 'number',
          width: 100,
          validate: 'required',
          align: 'center',
        },
        { type: 'control' },
      ],
    };
  },
  gridUsers: function (userList) {
    return {
      width: '100%',
      height: 'auto',
      inserting: false,
      editing: false,
      sorting: true,
      paging: true,
      datatype: 'json',
      deleteConfirm: 'Do you really want to delete the client?',
      data: userList,

      onItemDeleting: function (args) {
        deleteMethod.url('deleteUser', args.item.id, page).done(data => {
          $('.toast-msg').html(`
              <div class='toast' role='alert' aria-live='assertive' aria-atomic='true'>
                <div class='toast-body'>
                ${data}
                </div>
              </div>

              <script>
                $(".toast").toast({
                delay: 3000
                });
                $(".toast").toast('show');
              </script>`);
        });
      },

      fields: [
        {
          name: 'name',
          type: 'text',
          width: 150,
          validate: 'required',
          align: 'center',
        },
        {
          name: 'email',
          type: 'text',
          width: 200,
          validate: 'required',
          align: 'center',
        },
        { type: 'control' },
      ],
    };
  },
};
