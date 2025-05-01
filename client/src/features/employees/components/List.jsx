// Dependency.
import React from "react";

// Styling.
import {
  Box,
  Table,
  Thead,
  Tbody,
  Tfoot,
  Tr,
  Th,
  Td,
  TableCaption,
  TableContainer,
} from "@chakra-ui/react";
import {
  Wrap,
  WrapItem,
  Avatar,
  AvatarBadge,
  AvatarGroup,
} from "@chakra-ui/react";
import { IconButton } from "@chakra-ui/react";

// React icons.
import { FaEye, FaUserEdit, FaArchive } from "react-icons/fa";

// Hooks.
import { useList } from "../hooks/useList";

const List = () => {
  const employees = useList();

  return (
    <>
      <Box overflowX="auto" maxW="100%" maxH="75vh">
        <TableContainer>
          <Table variant={"striped"} size={"sm"}>
            <TableCaption>List of Employees</TableCaption>
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
              {employees.map((employee, index) => (
                <Tr key={index}>
                  <Td>{employee.e_id}</Td>
                  <Td>
                    <Wrap>
                      <WrapItem>
                        <Avatar
                          size={"sm"}
                          name={`${employee.e_first_name} ${employee.e_last_name}`}
                        />
                      </WrapItem>
                      <WrapItem></WrapItem>
                    </Wrap>
                  </Td>
                  <Td>
                    {employee.e_first_name} {employee.e_last_name}
                  </Td>
                  <Td>{employee.e_email}</Td>
                  <Td isNumeric>{employee.e_phone}</Td>
                  <Td>{employee.e_status}</Td>
                  <Td>{employee.e_created_at}</Td>
                  <Td>
                    <IconButton
                      colorScheme="blue"
                      aria-label="View"
                      icon={<FaEye />}
                    />
                    &nbsp;
                    <IconButton
                      colorScheme="green"
                      aria-label="Edit"
                      icon={<FaUserEdit />}
                    />
                    &nbsp;
                    <IconButton
                      colorScheme="yellow"
                      aria-label="Archive"
                      icon={<FaArchive />}
                    />
                  </Td>
                </Tr>
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
    </>
  );
};

export default List;
