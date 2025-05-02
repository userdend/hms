import React from "react";
import { Tr, Td } from "@chakra-ui/react";
import { Wrap, WrapItem, Avatar } from "@chakra-ui/react";
import { IconButton } from "@chakra-ui/react";
import { FaEye, FaUserEdit, FaArchive } from "react-icons/fa";
import { Link } from "react-router-dom";

const EmployeeItem = ({ employee }) => {
  return (
    <Tr>
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
          as={Link}
          to={`view/${employee.e_id}`}
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
  );
};

export default EmployeeItem;
