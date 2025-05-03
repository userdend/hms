import axios from "axios";

export const getBenefits = async () => {
  try {
    const request = await axios.get("http://localhost:8080/benefits");
    console.log(request.data);
    return request.data;
  } catch (error) {
    console.error(error);
    return [];
  }
};
