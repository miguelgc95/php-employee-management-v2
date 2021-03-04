export const deleteMethod = {
  url: function (pathToSend, data, page = 'dashboard') {
    const request = {
      url: `${URL}${page}/${pathToSend}`,
      data: { data: data },
      type: 'DELETE',
    };

    return $.ajax(request);
  },
};
