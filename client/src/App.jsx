import {
  BrowserRouter as Router,
  Routes,
  Route,
  BrowserRouter,
} from "react-router-dom";

// Import style.
import "./App.css";

// Import components.
import Login from "./features/auth/components/Login";
import Dashboard from "./features/dashboard/components/Dashboard";
import HomePage from "./features/dashboard/components/HomePage";
import Employees from "./features/employees/Employees";
import List from "./features/employees/components/List";
import Salaries from "./features/employees/components/Salaries";

const App = () => {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/login" element={<Login />} />
        <Route path="/dashboard" element={<Dashboard />}>
          <Route index element={<HomePage />} />
          <Route path="employees" element={<Employees />}>
            <Route index element={<List />} />
            <Route path="salaries" element={<Salaries />} />
          </Route>
        </Route>
      </Routes>
    </BrowserRouter>
  );
};

export default App;
