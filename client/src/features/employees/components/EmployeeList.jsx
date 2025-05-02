import React from "react";
import {
  Box,
  Button,
  Table,
  Thead,
  Tbody,
  Tfoot,
  Tr,
  Th,
  TableCaption,
  TableContainer,
  useColorModeValue,
} from "@chakra-ui/react";
import { SkeletonCircle, SkeletonText } from "@chakra-ui/react";
import EmployeeItem from "./EmployeeItem";
import useEmployees from "../hooks/useEmployees";
import { Link } from "react-router-dom";

const EmployeeList = () => {
  const { employees, loading, error } = useEmployees();
  const bg = useColorModeValue("white", "gray.700");

  return (
    <>
      <Button as={Link} to={"add"} colorScheme="teal" mb={4}>
        New
      </Button>
      {loading ? (
        <>
          <Box mb={4} borderRadius={"md"} padding="6" boxShadow="lg" bg={bg}>
            <SkeletonCircle size="10" />
            <SkeletonText mt="4" noOfLines={2} spacing="4" skeletonHeight="2" />
          </Box>
          <Box mb={4} borderRadius={"md"} padding="6" boxShadow="lg" bg={bg}>
            <SkeletonCircle size="10" />
            <SkeletonText mt="4" noOfLines={2} spacing="4" skeletonHeight="2" />
          </Box>
          <Box mb={4} borderRadius={"md"} padding="6" boxShadow="lg" bg={bg}>
            <SkeletonCircle size="10" />
            <SkeletonText mt="4" noOfLines={2} spacing="4" skeletonHeight="2" />
          </Box>
        </>
      ) : (
        <Box overflowX="auto" maxW="100%">
          <TableContainer>
            <Table variant={"striped"} size={"sm"}>
              <TableCaption>EmployeeList of Employees</TableCaption>
              <Thead>
                <Tr>
                  <Th>ID</Th>
                  <Th>Avatar</Th>
                  <Th>Full Name</Th>
                  <Th>Email</Th>
                  <Th isNumeric>Contact No.</Th>
                  <Th>Status</Th>
                  <Th>Joining Date</Th>
                  <Th>Action</Th>
                </Tr>
              </Thead>
              <Tbody>
                {employees.map((employee) => (
                  <EmployeeItem key={employee.e_id} employee={employee} />
                ))}
              </Tbody>
              <Tfoot>
                <Tr>
                  <Th>ID</Th>
                  <Th>Avatar</Th>
                  <Th>Full Name</Th>
                  <Th>Email</Th>
                  <Th isNumeric>Contact No.</Th>
                  <Th>Status</Th>
                  <Th>Joining Date</Th>
                  <Th>Action</Th>
                </Tr>
              </Tfoot>
            </Table>
          </TableContainer>
        </Box>
      )}
    </>
  );
};

export default EmployeeList;
