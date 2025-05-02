import React from "react";
import { Link, Outlet } from "react-router-dom";
import {
  Box,
  Flex,
  Heading,
  VStack,
  HStack,
  Button,
  IconButton,
  useColorMode,
  useDisclosure,
  Drawer,
  DrawerOverlay,
  DrawerContent,
  DrawerCloseButton,
  DrawerHeader,
  DrawerBody,
} from "@chakra-ui/react";
import { SiBurgerking } from "react-icons/si";
import { FaHome } from "react-icons/fa";
import { IoIosPeople } from "react-icons/io";

const Dashboard = () => {
  const { colorMode, toggleColorMode } = useColorMode();
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
      <Box flex="1" p="6" height={"100vh"} overflowY={"auto"}>
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
