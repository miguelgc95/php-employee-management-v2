export const getMethod = {
  url: function (pathToSend, data, page="dashboard") {
    const request = {
      url: `${URL}${page}/${pathToSend}`,
      data: data,
      type: 'GET',
    };

    return $.ajax(request);
  },
};
