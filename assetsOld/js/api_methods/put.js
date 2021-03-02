export const putMethod = {
    url: function (pathToSend, data) {
      const request = {
        url: `${URL}dashboard/${pathToSend}`,
        data: data,
        type: 'PUT',
      };
      return $.ajax(request);
    },
}