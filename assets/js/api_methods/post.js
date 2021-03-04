export const postMethod = {
  url: function (pathToSend, data, page = 'dashboard') {
    const request = {
      url: `${URL}${page}/${pathToSend}`,
      data: data,
      type: 'POST',
    };

    return $.ajax(request);
  },
};
