import { renderHook, act } from "@testing-library/react-hooks";
import useCalculator from "../../hooks/useCalculator";


test("addition", () => {
    const { result } = renderHook(() => useCalculator());
    const {
        addition,
        substraction,
        division,
        square,

    } = result.current;

    expect(addition("1", "1")).toEqual("2");
    expect(substraction("1", "1")).toEqual("0");
    expect(square("4")).toEqual("2");
    expect(square("4")).toEqual("4");
    expect(division("4", "2")).toEqual("2");
});