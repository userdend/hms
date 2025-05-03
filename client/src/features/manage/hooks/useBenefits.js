import { useEffect, useState } from "react";
import * as benefitService from "../services/benefitService";

const useBenefits = () => {
  const [benefits, setBenefits] = useState([]);
  const [loading, setLoading] = useState(true);
  const [error, setError] = useState(null);

  useEffect(() => {
    const fetchBenefits = async () => {
      try {
        const data = await benefitService.getBenefits();
        setBenefits(data);
      } catch (error) {
        setError("Failed to load employees.");
        console.error(error);
      } finally {
        setLoading(false);
      }
    };

    fetchBenefits();
  }, []);

  return { benefits, loading, error };
};

export default useBenefits;
