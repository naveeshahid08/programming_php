import React, { useEffect, useState } from "react";
import axios from "axios";

const ListUser = () => {
  const [users, SetUsers] = useState([]);

  useEffect(() => {
    getUser();
  }, []);

  function getUsers() {
    axios.get("http://localhost:8005/api/").then(function (response) {
      console.log(response.data);
      SetUsers(response.data);
    });
  }

  return (
    <div>
      <h1>List Users</h1>
      <table>
        <thead>
          <tr>
            <th>#</th>
            <th>Name</th>
            <th>Email</th>
            <th>Mobile</th>
          </tr>
        </thead>
        <tbody>
          {users.map((user, key) => (
            <tr key={key}>
              <td>{user.id}</td>
              <td>{user.name}</td>
              <td>{user.email}</td>
              <td>{user.mobile}</td>
            </tr>
          ))}
        </tbody>
      </table>
    </div>
  );
};

export default ListUser;
