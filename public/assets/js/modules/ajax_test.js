

function ajax_test() {


  const sendHttpRequest = (method, url, data) => {


    const promise = new Promise((resolve, reject) => {
      const xhr = new XMLHttpRequest();
      xhr.open(method, url)

      xhr.responseType = "text";

      xhr.setRequestHeader('Content-Type', 'application/json');


      xhr.onload = () => {
        resolve(xhr.response)

      }

      xhr.send(JSON.stringify(data));
    })

    return promise;

  }


  const getData = () => {

    const json = {
      name: "honda",
      age: 34
    }
    sendHttpRequest('get', '/first-project-austeam/home/ajaxtest/').then(responseData => {
      console.log(responseData);
    })
  }



  const sendData = () => {

    const json = {
      email: "yuraokun0@gmail.com",
      password: "Yula0822"
    }
    sendHttpRequest('post', '/first-project-austeam/users/login', json).then(responseData => {
      console.log(responseData);
    })
  }


  sendData();

}


module.exports = ajax_test;