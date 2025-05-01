import React from "react";
import { Link, Outlet } from "react-router-dom";
import {
  Box,
  Flex,
  Heading,
  Text,
  VStack,
  HStack,
  Stack,
  Button,
  IconButton,
  useColorMode,
  useColorModeValue,
  useDisclosure,
  Drawer,
  DrawerOverlay,
  DrawerContent,
  DrawerCloseButton,
  DrawerHeader,
  DrawerBody,
} from "@chakra-ui/react";
import {
  Wrap,
  WrapItem,
  Avatar,
  AvatarBadge,
  AvatarGroup,
} from "@chakra-ui/react";
import { SiBurgerking } from "react-icons/si";
import { FaHome } from "react-icons/fa";
import { IoIosPeople } from "react-icons/io";

const Dashboard = () => {
  const { colorMode, toggleColorMode } = useColorMode();
  const cardBg = useColorModeValue("gray.100", "gray.700");
  const { isOpen, onOpen, onClose } = useDisclosure();

  return (
    <Flex direction={{ base: "column", md: "row" }} height="100vh">
      {/* Sidebar for desktop */}
      <Box
        display={{ base: "none", md: "block" }}
        w="250px"
        bg="#2c3e50"
        color="white"
        p="5"
      >
        <Heading fontSize="2xl" mb="6">
          Example Co. Ltd.
        </Heading>
        <VStack align="start" spacing="4">
          <Button
            leftIcon={<FaHome />}
            as={Link}
            to="/dashboard"
            variant="ghost"
            color="white"
          >
            Home
          </Button>
          <HStack spacing={0}>
            <Button
              leftIcon={<IoIosPeople />}
              as={Link}
              to="/dashboard/employees"
              variant="ghost"
              color="white"
            >
              Employees
            </Button>
            <AvatarGroup size="sm" max={2}>
              <Avatar name="Ryan Florence" src="https://bit.ly/ryan-florence" />
              <Avatar name="Segun Adebayo" src="https://bit.ly/sage-adebayo" />
              <Avatar name="Kent Dodds" src="https://bit.ly/kent-c-dodds" />
              <Avatar
                name="Prosper Otemuyiwa"
                src="https://bit.ly/prosper-baba"
              />
              <Avatar name="Christian Nwamba" src="https://bit.ly/code-beast" />
            </AvatarGroup>
          </HStack>
          <Button variant="ghost" color="white">
            Settings
          </Button>
        </VStack>
      </Box>

      {/* Mobile Drawer Menu */}
      <Drawer placement="left" onClose={onClose} isOpen={isOpen}>
        <DrawerOverlay />
        <DrawerContent bg="teal.500" color="white">
          <DrawerCloseButton />
          <DrawerHeader>Menu</DrawerHeader>
          <DrawerBody>
            <VStack align="start" spacing="4">
              <Button as={Link} to="/dashboard" variant="ghost" color="white">
                Home
              </Button>
              <Button
                as={Link}
                to="/dashboard/employees"
                variant="ghost"
                color="white"
              >
                Employees
              </Button>
              <Button variant="ghost" color="white">
                Settings
              </Button>
            </VStack>
          </DrawerBody>
        </DrawerContent>
      </Drawer>

      {/* Main content area */}
      <Box flex="1" p="6">
        <Flex justify="space-between" mb="4">
          <IconButton
            display={{ base: "inline-flex", md: "none" }}
            icon={<SiBurgerking />}
            onClick={onOpen}
            aria-label="Open menu"
          />
          <Button onClick={toggleColorMode}>
            Toggle {colorMode === "light" ? "Dark" : "Light"}
          </Button>
        </Flex>

        {/* Renders the nested route */}
        <Outlet />
      </Box>
    </Flex>
  );
};

export default Dashboard;
