import axios from "axios";

export const getEmployees = async () => {
  try {
    const request = await axios.get("http://localhost:8080/employees");
    return request.data;
  } catch (error) {
    console.error(error);
    return [];
  }
};

export const getEmployee = async (id) => {
  try {
    const request = await axios.get(`http://localhost:8080/employee/${id}`);
    return request.data;
  } catch (error) {
    console.error(error);
    return {};
  }
};
