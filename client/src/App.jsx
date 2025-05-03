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
import EmployeePage from "./features/employees/EmployeePage";
import EmployeeList from "./features/employees/components/EmployeeList";
import EmployeeAdd from "./features/employees/components/EmployeeAdd";
import EmployeeDetails from "./features/employees/components/EmployeeDetails";
import BenefitList from "./features/manage/components/BenefitList";

const App = () => {
  return (
    <BrowserRouter>
      <Routes>
        <Route path="/login" element={<Login />} />
        <Route path="/dashboard" element={<Dashboard />}>
          <Route index element={<HomePage />} />
          <Route path="employees" element={<EmployeePage />}>
            <Route index element={<EmployeeList />} />
            <Route path="add" element={<EmployeeAdd />} />
            <Route path="view/:id" element={<EmployeeDetails />} />
          </Route>
          <Route path="benefit" element={<BenefitList />} />
        </Route>
      </Routes>
    </BrowserRouter>
  );
};

export default App;
