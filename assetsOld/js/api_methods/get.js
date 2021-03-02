export const getMethod = {
  url: function (pathToSend, data) {
    const request = {
      url: `${URL}dashboard/${pathToSend}`,
      data: data,
      type: 'GET',
    };

    return $.ajax(request);
  },
};
