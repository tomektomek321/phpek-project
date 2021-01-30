import { data } from 'jquery';
import React from 'react';
import ReactDOM from 'react-dom';
console.log(1);
function followUser(data1) {
    console.log(2);
    console.log(data1);
    data1.follows = (data1.follows == "1") ? false : true;
    axios.post('/follow/' + data1.user)
    .then(response => {
        console.log(response.data);

        //console.log(data1);
        //Example(data1);
    });
}

function Example(data) {

    return (
        <button className="btn btn-primary" onClick={() => followUser(data)}>

            { data.follows > 0 ? "followujesz" : "follow" }

        </button>
    );
}

export default Example;

if (document.getElementById('example')) {

    const propsContainer = document.getElementById("example");
        const props = Object.assign({}, propsContainer.dataset);
        console.log(props);

    ReactDOM.render(<Example {...props} />, document.getElementById('example'));
}
