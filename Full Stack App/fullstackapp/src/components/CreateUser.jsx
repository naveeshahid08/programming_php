import React from "react";
import { useState } from "react";
import axios from "axios";

const CreateUser = () => {
  const [inputs, setInputs] = useState({});

  const handleChange = (event) => {
    const name = event.target.name;
    const value = event.target.value;

    setInputs((values) => ({ ...values, [name]: value }));
  };

  const handleSubmit = (event) => {
    event.preventDefault();
    axios.post("http://localhost:8005/api/", inputs);
    console.log(inputs);
  };
  return (
    <div>
      <h1>Create User</h1>
      <form onSubmit={handleSubmit}>
        <label htmlFor="">Name:</label>
        <input type="text" name="name" id="0" onChange={handleChange} />
        <br />

        <label htmlFor="">Email:</label>
        <input type="text" name="email" id="1" onChange={handleChange} />
        <br />

        <label htmlFor="">Mobile:</label>
        <input type="text" name="mobile" id="2" onChange={handleChange} />
        <br />
        <label htmlFor="">Address:</label>
        <input type="text" name="mobile" id="2" onChange={handleChange} />
        <br />

        <button>Save</button>
      </form>
    </div>
  );
};

export default CreateUser;
