import { useEffect, useState } from "react";
import { listService } from "../services/listService";

export const useList = () => {
  const [employees, setEmployees] = useState([]);

  useEffect(() => {
    const fetch = async () => {
      const data = await listService();
      setEmployees(data);
    };

    fetch();
  }, []);

  return employees;
};
