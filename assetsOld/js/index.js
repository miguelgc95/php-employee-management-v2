import { getMethod } from './api_methods/get.js';
import { helpers } from './helpers/helpers.js';

getMethod
  .url(`getAllEmployees`, 'employeeList')
  .then(data => {
    console.log(data);
    $('#main-wrapper').jsGrid(helpers.grid(data));
    $('.input_avatar').last().prop('checked',true);

  });
