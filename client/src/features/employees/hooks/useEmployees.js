import { useEffect, useState } from "react";
import * as employeeService from "../services/employeeService";

const useEmployees = () => {
  const [employee, setEmployee] = useState({});
  const [employees, setEmployees] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    const fetchEmployees = async () => {
      try {
        const data = await employeeService.getEmployees();
        setEmployees(data);
      } catch (error) {
        setError("Failed to load employees.");
        console.error(error);
      } finally {
        setLoading(false);
      }
    };

    fetchEmployees();
  }, []);

  const get = async (id) => {
    try {
      const data = await employeeService.getEmployee(id);
      setEmployee(data);
    } catch (error) {
      setError("Failed to load employee.");
      console.error(error);
    } finally {
      setLoading(false);
    }
  };

  return { employee, employees, loading, error, get };
};

export default useEmployees;
