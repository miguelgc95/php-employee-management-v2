export const postMethod = {
  url: function (pathToSend, data) {
    const request = {
      url: `${URL}dashboard/${pathToSend}`,
      data: data,
      type: 'POST',
    };

    return $.ajax(request);
  },
};
