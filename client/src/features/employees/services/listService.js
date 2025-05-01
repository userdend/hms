import axios from "axios";

export const listService = async () => {
  try {
    const request = await axios.get("http://localhost:8080/employees");
    return request.data;
  } catch (error) {
    console.error(error);
    return [];
  }
};
