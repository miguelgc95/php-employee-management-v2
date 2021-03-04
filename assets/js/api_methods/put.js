export const putMethod = {
  url: function (pathToSend, data, page = 'dashboard') {
    const request = {
      url: `${URL}${page}/${pathToSend}`,
      data: data,
      type: 'PUT',
    };
    return $.ajax(request);
  },
};
