test_cases = gets.chomp.strip.to_i

input = []

test_cases.times do
  input << gets.chomp.strip.split(' ').map(&:to_i)
  input << gets.chomp.strip.split(' ').map(&:to_i).sort
end

out = []

(0...input.length).step(2).each do |i|
  raghu_cal =  input[i][0]
  sayan_cal = input[i][1]
  n = input[i][2]
  arr = input[i + 1]

  max = [raghu_cal,sayan_cal].max
  min = [raghu_cal,sayan_cal].min
  sum = 0

  rc = 0
  sc = 0

  arr.each do |value|
    sum += value
    if sum <= raghu_cal
      rc += 1
    end
    if sum <= sayan_cal
      sc += 1
    end
    break if sum >= max
  end

  if rc > sc
    out << "Raghu Won"
  elsif sc > rc
    out << "Sayan Won"
  else
    out << "Tie"
  end
end

puts out