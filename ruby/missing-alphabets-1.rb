test_cases = gets.chomp.strip.to_i

input = []

test_cases.times do
  input << gets.chomp.strip
  len =  gets.chomp.strip.to_i
  temp = []
  len.times do
    temp << gets.chomp.strip
  end
  input << temp
end

#print input



out = []

(0...input.length).step(2).each do |i|
  alphabet = input[i]
  arr = input[i + 1]

  custom_sort = ->(a, b) do
  a.split('').each_with_index do |char, i|
    return alphabet.index(a[i]) <=> alphabet.index(b[i]) if a[i] != b[i]
  end

  return alphabet.index(' ') <=> alphabet.index(b[-1])
  end

  out << arr.sort(&custom_sort)
 
end

puts out
