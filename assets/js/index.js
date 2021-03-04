import { getMethod } from './api_methods/get.js';
import { helpers } from './helpers/helpers.js';

if (page === 'dashboard') {
  getMethod.url(`getAllEmployees`, 'employeeList', page).then(data => {
    console.log(data);
    $('#main-wrapper').jsGrid(helpers.gridEmployee(data));
    $('.input_avatar').last().prop('checked', true);
  });
} else {
  getMethod.url(`getAllUsers`, 'userList', page).then(data => {
    console.log(data);
    $('#main-wrapper').jsGrid(helpers.gridUsers(data));
    $('.input_avatar').last().prop('checked', true);
  });
}
