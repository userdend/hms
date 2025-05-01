import { Tabs, TabList, TabPanels, Tab, TabPanel } from "@chakra-ui/react";
import { Outlet } from "react-router-dom";

const Employees = () => {
  return (
    <>
      <Tabs variant={"enclosed"} colorScheme="blue">
        <TabList>
          <Tab>General</Tab>
          <Tab>Salaries</Tab>
          <Tab>Archive</Tab>
        </TabList>
        <TabPanels>
          <TabPanel>
            <Outlet />
          </TabPanel>
        </TabPanels>
      </Tabs>
    </>
  );
};

export default Employees;
