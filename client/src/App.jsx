import { BrowserRouter as Router, Routes, Route } from "react-router-dom";

// Import style.
import "./App.css";

// Import components.
import Login from "./features/auth/components/Login";
import Dashboard from "./features/dashboard/components/Dashboard";
import Employees from "./features/employees/Employees";
import List from "./features/employees/list/components/List";
import Salaries from "./features/employees/salaries/components/Salaries";

const App = () => {
  return (
    <Router>
      <Routes>
        <Route path="/login" element={<Login />} />
        <Route path="/dashboard" element={<Dashboard />} />
        <Route path="/employees" element={<Employees />}>
          <Route path="" element={<List />} />
          <Route path="salaries" element={<Salaries />} />
        </Route>
      </Routes>
    </Router>
  );
};

export default App;
