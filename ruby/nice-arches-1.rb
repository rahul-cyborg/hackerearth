test_cases = gets.chomp.strip.to_i

input = []

test_cases.times do
  input << gets.chomp.strip.split('')
end

count = 0

input.each do |arr|
  len = arr.length
  temp = []
  while arr.length != 0
    val = arr.pop
    if temp.length > 0
      t = temp[-1]
      if t == val
        temp.pop
      else
        temp << val
      end
    else
      temp << val
    end
  end

count += 1 if temp.length <= 2 && len >= 3
end

puts count