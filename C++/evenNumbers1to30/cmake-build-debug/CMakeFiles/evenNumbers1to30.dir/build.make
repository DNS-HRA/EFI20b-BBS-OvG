# CMAKE generated file: DO NOT EDIT!
# Generated by "NMake Makefiles" Generator, CMake Version 3.17

# Delete rule output on recipe failure.
.DELETE_ON_ERROR:


#=============================================================================
# Special targets provided by cmake.

# Disable implicit rules so canonical targets will work.
.SUFFIXES:


.SUFFIXES: .hpux_make_needs_suffix_list


# Command-line flag to silence nested $(MAKE).
$(VERBOSE)MAKESILENT = -s

# Suppress display of executed commands.
$(VERBOSE).SILENT:


# A target that is always out of date.
cmake_force:

.PHONY : cmake_force

#=============================================================================
# Set environment variables for the build.

!IF "$(OS)" == "Windows_NT"
NULL=
!ELSE
NULL=nul
!ENDIF
SHELL = cmd.exe

# The CMake executable.
CMAKE_COMMAND = "C:\Program Files\JetBrains\CLion 2020.2.4\bin\cmake\win\bin\cmake.exe"

# The command to remove a file.
RM = "C:\Program Files\JetBrains\CLion 2020.2.4\bin\cmake\win\bin\cmake.exe" -E rm -f

# Escaping for special characters.
EQUALS = =

# The top-level source directory on which CMake was run.
CMAKE_SOURCE_DIR = C:\Users\germa\Documents\BBS_OvG\C++\evenNumbers1to30

# The top-level build directory on which CMake was run.
CMAKE_BINARY_DIR = C:\Users\germa\Documents\BBS_OvG\C++\evenNumbers1to30\cmake-build-debug

# Include any dependencies generated for this target.
include CMakeFiles\evenNumbers1to30.dir\depend.make

# Include the progress variables for this target.
include CMakeFiles\evenNumbers1to30.dir\progress.make

# Include the compile flags for this target's objects.
include CMakeFiles\evenNumbers1to30.dir\flags.make

CMakeFiles\evenNumbers1to30.dir\main.cpp.obj: CMakeFiles\evenNumbers1to30.dir\flags.make
CMakeFiles\evenNumbers1to30.dir\main.cpp.obj: ..\main.cpp
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green --progress-dir=C:\Users\germa\Documents\BBS_OvG\C++\evenNumbers1to30\cmake-build-debug\CMakeFiles --progress-num=$(CMAKE_PROGRESS_1) "Building CXX object CMakeFiles/evenNumbers1to30.dir/main.cpp.obj"
	C:\PROGRA~2\MICROS~3\2019\COMMUN~1\VC\Tools\MSVC\1428~1.293\bin\Hostx86\x86\cl.exe @<<
 /nologo /TP $(CXX_DEFINES) $(CXX_INCLUDES) $(CXX_FLAGS) /FoCMakeFiles\evenNumbers1to30.dir\main.cpp.obj /FdCMakeFiles\evenNumbers1to30.dir\ /FS -c C:\Users\germa\Documents\BBS_OvG\C++\evenNumbers1to30\main.cpp
<<

CMakeFiles\evenNumbers1to30.dir\main.cpp.i: cmake_force
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green "Preprocessing CXX source to CMakeFiles/evenNumbers1to30.dir/main.cpp.i"
	C:\PROGRA~2\MICROS~3\2019\COMMUN~1\VC\Tools\MSVC\1428~1.293\bin\Hostx86\x86\cl.exe > CMakeFiles\evenNumbers1to30.dir\main.cpp.i @<<
 /nologo /TP $(CXX_DEFINES) $(CXX_INCLUDES) $(CXX_FLAGS) -E C:\Users\germa\Documents\BBS_OvG\C++\evenNumbers1to30\main.cpp
<<

CMakeFiles\evenNumbers1to30.dir\main.cpp.s: cmake_force
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green "Compiling CXX source to assembly CMakeFiles/evenNumbers1to30.dir/main.cpp.s"
	C:\PROGRA~2\MICROS~3\2019\COMMUN~1\VC\Tools\MSVC\1428~1.293\bin\Hostx86\x86\cl.exe @<<
 /nologo /TP $(CXX_DEFINES) $(CXX_INCLUDES) $(CXX_FLAGS) /FoNUL /FAs /FaCMakeFiles\evenNumbers1to30.dir\main.cpp.s /c C:\Users\germa\Documents\BBS_OvG\C++\evenNumbers1to30\main.cpp
<<

# Object files for target evenNumbers1to30
evenNumbers1to30_OBJECTS = \
"CMakeFiles\evenNumbers1to30.dir\main.cpp.obj"

# External object files for target evenNumbers1to30
evenNumbers1to30_EXTERNAL_OBJECTS =

evenNumbers1to30.exe: CMakeFiles\evenNumbers1to30.dir\main.cpp.obj
evenNumbers1to30.exe: CMakeFiles\evenNumbers1to30.dir\build.make
evenNumbers1to30.exe: CMakeFiles\evenNumbers1to30.dir\objects1.rsp
	@$(CMAKE_COMMAND) -E cmake_echo_color --switch=$(COLOR) --green --bold --progress-dir=C:\Users\germa\Documents\BBS_OvG\C++\evenNumbers1to30\cmake-build-debug\CMakeFiles --progress-num=$(CMAKE_PROGRESS_2) "Linking CXX executable evenNumbers1to30.exe"
	"C:\Program Files\JetBrains\CLion 2020.2.4\bin\cmake\win\bin\cmake.exe" -E vs_link_exe --intdir=CMakeFiles\evenNumbers1to30.dir --rc=C:\PROGRA~2\WI3CF2~1\10\bin\100183~1.0\x86\rc.exe --mt=C:\PROGRA~2\WI3CF2~1\10\bin\100183~1.0\x86\mt.exe --manifests  -- C:\PROGRA~2\MICROS~3\2019\COMMUN~1\VC\Tools\MSVC\1428~1.293\bin\Hostx86\x86\link.exe /nologo @CMakeFiles\evenNumbers1to30.dir\objects1.rsp @<<
 /out:evenNumbers1to30.exe /implib:evenNumbers1to30.lib /pdb:C:\Users\germa\Documents\BBS_OvG\C++\evenNumbers1to30\cmake-build-debug\evenNumbers1to30.pdb /version:0.0  /machine:X86 /debug /INCREMENTAL /subsystem:console  kernel32.lib user32.lib gdi32.lib winspool.lib shell32.lib ole32.lib oleaut32.lib uuid.lib comdlg32.lib advapi32.lib 
<<

# Rule to build all files generated by this target.
CMakeFiles\evenNumbers1to30.dir\build: evenNumbers1to30.exe

.PHONY : CMakeFiles\evenNumbers1to30.dir\build

CMakeFiles\evenNumbers1to30.dir\clean:
	$(CMAKE_COMMAND) -P CMakeFiles\evenNumbers1to30.dir\cmake_clean.cmake
.PHONY : CMakeFiles\evenNumbers1to30.dir\clean

CMakeFiles\evenNumbers1to30.dir\depend:
	$(CMAKE_COMMAND) -E cmake_depends "NMake Makefiles" C:\Users\germa\Documents\BBS_OvG\C++\evenNumbers1to30 C:\Users\germa\Documents\BBS_OvG\C++\evenNumbers1to30 C:\Users\germa\Documents\BBS_OvG\C++\evenNumbers1to30\cmake-build-debug C:\Users\germa\Documents\BBS_OvG\C++\evenNumbers1to30\cmake-build-debug C:\Users\germa\Documents\BBS_OvG\C++\evenNumbers1to30\cmake-build-debug\CMakeFiles\evenNumbers1to30.dir\DependInfo.cmake --color=$(COLOR)
.PHONY : CMakeFiles\evenNumbers1to30.dir\depend

